<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceP    rovider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::resource('/staffs','App\Http\Controllers\StaffUsersController');
route::resource('/inventory','App\Http\Controllers\InventoryController');


route::controller(AuthController::class)->group(function () {
    Route::get('/signin','signin')->name('signin');
    Route::post('/signin_store', 'signin_store')->name('signin.store');
    Route::get('logout','logout')->name('logout');
});
