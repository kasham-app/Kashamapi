<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'password_confirmation',
        'role',
        'onboarding',


        /**
        * ******* CUSTOM ACCOUNT INFORMATION **********
        */

        'account_type',
        'full_name',
        'phone_number',
        'affiliate_id',
        'referred_by',

        'sms_code',//
        'email_code',//
        'api_requests',
        'is_pro',

        'stateof_origin',//state of origin - onboarding 1
        'reasonfor_kasham',//reason for kasham - onboarding 2
        /**
         * pin confirmation logic should be implemented from the mobile app.
         */
        'pin_code',//enter your pin onboarding - 3

        'transaction_pin',

        //new
        'selfie_upload',
        'document_upload',
        'bvn_number',
        'kasham_tag',



    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'password_confirmation'

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
         'onboarding' => 'json',
    ];


    public function transactions()
    {
        return $this->hasMany(Transaction::class,"user_id");
    }

    public function userwallet()
    {
        return $this->hasMany(UserWallet::class,"user_id");
    }
}
