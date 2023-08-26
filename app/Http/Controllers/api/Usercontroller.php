<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserWallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Usercontroller extends Controller
{
    public function update(Request $request)
    {
        if (empty($request->all())) {
            return response()->json([
                'message' => "No parameters supplied. Changes were not made."
            ]);
        } else {

            $user = $request->user();

            $onboardingData = $user->onboarding ?? [];

            if ($request->has('IsstateOfOriginSet')) {
                $onboardingData['IsstateOfOriginSet'] = $request->input('IsstateOfOriginSet');
            }

            if ($request->has('IsreasonForKashamSet')) {
                $onboardingData['IsreasonForKashamSet'] = $request->input('IsreasonForKashamSet');
            }

            if ($request->has('IspinCodeSet')) {
                $onboardingData['IspinCodeSet'] = $request->input('IspinCodeSet');
            }

            if ($request->has('IsSelfieTaken')) {
                $onboardingData['IsSelfieTaken'] = $request->input('IsSelfieTaken');
            }

            if ($request->has('IsdocumentUploaded')) {
                $onboardingData['IsdocumentUploaded'] = $request->input('IsdocumentUploaded');
            }

            if ($request->has('IsbvnSet')) {
                $onboardingData['IsbvnSet'] = $request->input('IsbvnSet');
            }

            if ($request->has('isTagSet')) {
                $onboardingData['isTagSet'] = $request->input('isTagSet');
            }


            $user->name = $request->name ? $request->name : $user->name;
            $user->email = $request->email ? $request->email : $user->email;
            $user->password = $request->password ? Hash::make($request->password) : $user->password;
            $user->password_confirmation = $request->password ? $request->password : $user->password_confirmation;
            $user->role = $request->role ? $request->role : $user->role;
            $user->account_type = $request->account_type ? $request->account_type : $user->account_type;
            $user->full_name = $request->full_name ? $request->full_name : $user->full_name;
            $user->phone_number = $request->phone_number ? $request->phone_number : $user->phone_number;
            $user->name = $request->full_name ? $request->full_name : $user->full_name;
            $user->affiliate_id = $request->affiliate_id ? $request->affiliate_id : $user->affiliate_id;
            $user->referred_by = $request->referred_by ? $request->referred_by : $user->referred_by;
            $user->sms_code = $request->sms_code ? $request->sms_code : $user->sms_code;
            $user->email_code = $request->email_code ? $request->email_code : $user->email_code;
            $user->api_requests = $request->api_requests ? $request->api_requests : $user->api_requests;
            $user->is_pro = $request->is_pro ? $request->is_pro : $user->is_pro;
            $user->stateof_origin = $request->stateof_origin ? $request->stateof_origin : $user->stateof_origin;
            $user->reasonfor_kasham = $request->reasonfor_kasham ? $request->reasonfor_kasham : $user->reasonfor_kasham;

            if ($request->has('pin_code')) {
                if (strlen($request->pin_code) > 4) {
                    return response()->json([
                        'message' => "Your pin code must be a 4digit number"
                    ], 422);
                }

                $user->pin_code = $request->pin_code ? $request->pin_code  : $user->pin_code;
            }

            if ($request->has('transaction_pin')) {
                if (strlen($request->transaction_pin) > 4) {
                    return response()->json([
                        'message' => "Your transaction pin must be a 4digit number"
                    ], 422);
                }


                if ($request->transaction_pin ==  $user->pin_code) {
                    return response()->json([
                        'message' => "Your transaction pin must be different from your Account Pin"
                    ], 422);
                }

                $user->transaction_pin = $request->transaction_pin ? $request->transaction_pin  : $user->transaction_pin;
            }


            if ($request->has('transaction_pin') && $request->has('pin_code') && $request->transaction_pin == $request->pin_code) {
                return response()->json([
                    'message' => "Your transaction pin must be different from your account pin."
                ]);
            }




            if ($request->hasFile('selfie_upload')) {

                $request->validate([
                    'selfie_upload' => ['mimes:png,jpg'],
                ]);

                $file = $request->file('selfie_upload');


                // Generate a unique file name
                $timestamp = Carbon::now()->timezone('Africa/lagos')->format('Y_m_d_His');
                $extension = $file->extension();
                $fileName = $timestamp . 'selfie_upload.' . $extension;

                $file->move(public_path('uploads/selfie'), $fileName);

                // Update the file attribute in the model
                $user->selfie_upload = $fileName;
            }

            if ($request->hasFile('document_upload')) {
                $request->validate([
                    'document_upload' => ['mimes:png,jpg'],
                ]);
                $file = $request->file('document_upload');


                // Generate a unique file name
                $timestamp = Carbon::now()->timezone('Africa/lagos')->format('Y_m_d_His');
                $extension = $file->extension();
                $fileName = $timestamp . 'document_upload.' . $extension;

                $file->move(public_path('uploads/documents'), $fileName);

                // Update the file attribute in the model
                $user->document_upload = $fileName;
            }


            $user->bvn_number = $request->bvn_number ?  $request->bvn_number : $user->bvn_number;
            $user->kasham_tag = $request->kasham_tag ? $request->kasham_tag : $user->kasham_tag;

            $user->onboarding = $onboardingData;
            $user->save();

            return response()->json([
                'message' => 'Account updated successfully.'
            ]);
        }
    }


    public function fetchuser(Request $request)
    {
        try {
            $user = $request->user();

            if ($user->is_pro == 0) {
                $count = 0;
                $user->api_requests = $count + 1;
                $user->update();
            }

            $userWithRelationships = $user->load(['transactions', 'userwallet']); // Eager loading relationships

            return response()->json([
                'message' => $userWithRelationships->makeHidden([
                    'password', 'password_confirmation'
                ]),
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 401);
        }
    }


    public function VerifySmsCode(Request $request)
    {

        $request->validate([
            'email' => ['required', 'exists:users'],
            'code' => ['required'],
        ]);

        $smscode = $request->code;
        $user = $request->user();

        if ($user->sms_code == $smscode) {
            return response()->json([
                'message' => "email code verified successfully",
                "status" => 'validated'

            ], 200);
        } else {
            return response()->json([
                'message' => "the code you provided is not valid",
            ], 403);
        }
    }


    public function verifyEmailCode(Request $request)
    {

        $request->validate([
            'email' => ['required', 'exists:users'],
            'code' => ['required'],
        ]);

        $emailcode = $request->code;
        $user = $request->user();

        if ($user->email_code == $emailcode) {
            return response()->json([
                'message' => "email code verified successfully",
                "status" => 'validated'

            ], 200);
        } else {
            return response()->json([
                'message' => "the code you provided is not valid",
            ], 403);
        }
    }

    public function storetransactions(Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'amount' => ['required'],

        ]);


        $transaction = new Transaction();
        $transaction->user_id = $request->user_id;
        $transaction->transaction_id = $this->generateTransactionId(); // Generate the transaction ID
        $transaction->amount = $request->amount;
        $transaction->currency = $request->currency;
        $transaction->status = $request->status;
        $transaction->payment_method = $request->payment_method;
        $transaction->description = $request->description;
        $transaction->sent_to = $request->sent_to;
        $transaction->received_from = $request->received_from;
        $transaction->transaction_type = $request->transaction_type;
        $transaction->save();

        $balance = UserWallet::find($request->user_id);
        $oldbalance = $balance->balance + $request->amount;
        $balance->balance = $oldbalance;
        $balance->update();

        return response()->json([
            'message' => "Payment was successfull",
            'data' => $balance,
            'user' => $balance->user
        ], 200);

        //email notification goes here

    }



    protected  function generateTransactionId($length = 12)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $transactionId = '';

        for ($i = 0; $i < $length; $i++) {
            $transactionId .= $characters[rand(0, $charactersLength - 1)];
        }

        return $transactionId;
    }

    public function sendmoney(Request $request)
    {
        $user = $request->user();


    }

    public function kashamverify(Request $request)
    {
        $user = $request->user();
        $validator = Validator::make($request->all(), [
            'kasham_tag' => 'required_without:phone_number',
            'phone_number' => 'required_without:kasham_tag',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Phone number or kashamtag is required.'], 400);
        }

return 200;
    }
}
