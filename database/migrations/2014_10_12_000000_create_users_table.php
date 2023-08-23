<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     protected $defaultOnboarding = [
        "IsstateOfOriginSet" => 0,
        "IsreasonForKashamSet" => 0,
        "IspinCodeSet" => 0,
        "IsSelfieTaken" => 0,
        "IsdocumentUploaded" => 0,
        "IsbvnSet" => 0,
        "isTagSet" => 0
    ];



    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('password_confirmation')->nullable();
            $table->boolean('role')->nullable();


            $table->string('account_type')->nullable();
            $table->string('full_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('affiliate_id')->nullable();
            $table->string('referred_by')->nullable();
            $table->json('onboarding')->default(json_encode($this->defaultOnboarding))->nullable();

            $table->string('is_pro')->nullable();
            $table->string('api_requests')->nullable();
            $table->string('sms_code')->nullable();
            $table->string('email_code')->nullable();

            //bio data
            $table->string('stateof_origin')->nullable();
            $table->string('reasonfor_kasham')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('transaction_pin')->nullable();
            //new
            $table->string('selfie_upload')->nullable();
            $table->string('document_upload')->nullable();
            $table->string('bvn_number')->nullable();
            $table->string('kasham_tag')->nullable();



            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
