<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Logincontroller extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422); // 422 Unprocessable Entity
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Create a token with a specific scope
            // $token = $user->createToken('login-token', ['view-members'])->accessToken;
            $token = $user->createToken('login-token')->accessToken;

            return response()->json([
                'message' => 'Logged in successfully',
                'access_token' => $token,
                'user' => $user,
            ], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401); // 401 Unauthorized
        }
    }
}
