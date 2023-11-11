<?php

use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('', 'index')->name('dashboard');
    });
});

//Authenticate
Route::controller(AuthenticateController::class)->group(function () {
    Route::get('login', 'loginPage')->name('login');
    Route::post('login','loginHandle')->name('loginHandle');
});