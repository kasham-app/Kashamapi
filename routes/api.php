<?php

use App\Http\Controllers\api\Logincontroller;
use App\Http\Controllers\api\MemberController;
use App\Http\Controllers\api\Registercontroller;
use App\Http\Controllers\api\LogoutController;
use App\Http\Controllers\api\ResetPasswordController;
use App\Http\Controllers\api\Usercontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v1')->middleware(['auth:api'])->group(function(){
//signin
Route::post('/signin', [Logincontroller::class,'store'])->withoutMiddleware(['auth:api']);

//signup
Route::post('/signup', [Registercontroller::class,'store'])->withoutMiddleware(['auth:api']);

//signout
Route::post('/signout', [LogoutController::class, 'signout']);

//reset password
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.reset')->withoutMiddleware(['auth:api']);

//forget password
Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('password.email')->withoutMiddleware(['auth:api']);

//update user
Route::post('/update/user', [Usercontroller::class, 'update'])->name('users.update');

//third-party app access rules
Route::get('/user',[Usercontroller::class,'fetchuser'])->name('user.fetch')->middleware(['membership.check']);

Route::post('/verify/mailcode',[Usercontroller::class,'verifyEmailCode'])->name('emailcode.verify');

Route::post('/verify/smscode',[Usercontroller::class,'VerifySmsCode'])->name('Verify.SmsCode');


//store transaction.
Route::post('/transaction/store',[Usercontroller::class,'storetransactions'])->name('store.transactions');


});



