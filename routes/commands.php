<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Codedwebltd commands Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('commands')->middleware([])->group( function () {

Route::get('storage-link', function (){Artisan::call('storage:link');return Artisan::output();});
Route::get('optimize-clear', function (){Artisan::call('optimize:clear');return Artisan::output();});
Route::get('optimize-notification', function (){Artisan::call('optimize:notification');return Artisan::output();});
Route::get('trade-coin', function (){Artisan::call('trade:coin');return Artisan::output();});


});


Route::get('/check', function () {
    Artisan::call('outdated:modules');
    return redirect()->back();
});
