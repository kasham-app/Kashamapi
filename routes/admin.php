<?php

use App\Http\Controllers\Admin\Admincontroller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('secure')->middleware(['auth', 'admincheck'])->group(function () {

    Route::get('/', [Admincontroller::class,'index'])->name('admin');

});




require __DIR__ . '/auth.php';
