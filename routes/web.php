<?php

use App\Http\Controllers\Homepage\Maincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Oath\OAuthController;
use Laravel\Passport\Http\Controllers\ApproveAuthorizationController;
use Laravel\Passport\Http\Controllers\DenyAuthorizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Maincontroller::class,'index'])->name('homepage');
Route::prefix('home')->middleware([])->group(function (){

    Route::get('/', [Maincontroller::class,'index'])->name('homepage');
});



/*
|--------------------------------------------------------------------------
| OAUTH 2.0 SETUP BY CODEDWEBLTD
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';
