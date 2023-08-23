<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Codedwebltd;
use App\Mail\VerificationCodeMaillable;
use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class Registercontroller extends Controller
{
    public function __construct()
    {

        $this->middleware(['checkreferral']);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6',
                'account_type' => 'required|string',
                'full_name' => 'required|string',
                'phone_number' => 'required|string',
                'referred_by' => 'nullable|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422); // 422 Unprocessable Entity
        }

        $affiliate_id = Codedwebltd::generateaffiliateid();
        $referred_by = $request->cookie('referral');

        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'account_type' => $request->account_type,
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'affiliate_id' => $affiliate_id,
            'referred_by' => $referred_by,
            'password_confirmation' => $request->password,
            //'sms_code' => rand(2000,40000),
            'email_code' => rand(20000,400000),
            'role' => 0
        ]);

        UserWallet::create([
            'user_id' => $user['id'],
            'balance' => 0,
        ]);

        $emailcode = $user['email_code'];
        session()->put(['emailcode' => $emailcode,'name' => $request->full_name]);
         Mail::to($request->email)->send(new VerificationCodeMaillable());
        session()->forget(['emailcode','name']);
        // Uncomment the following lines to generate a token during registration
        $token = $user->createToken('registration-token')->accessToken;
        return response()->json([
            'message' => 'Your account has been created successfully.',
            'access_token' => $token,
        ], 201);


        //return response()->json(['message' => 'User registered successfully'], 201);
    }
}
