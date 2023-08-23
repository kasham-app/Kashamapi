<?php

use App\Http\Controllers\User\Usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Users routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/dashboard')->middleware(['auth','verified','usercheck'])->group( function () {

    Route::get('/', [Usercontroller::class,'index'])->name('dashboard');
    Route::get('/all-clients', [Usercontroller::class,'allclient'])->name('dashboard.allclient');
    Route::get('/register-oauth', [Usercontroller::class,'registeroauth'])->name('dashboard.registeroauth');

});


require __DIR__.'/auth.php';



