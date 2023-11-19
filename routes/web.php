<?php

use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SlideController;
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
    return view('home-pages.index');
});


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('', 'index')->name('dashboard');
    });

    //banner
    Route::controller(BannerController::class)->prefix('banner')->name('banner.')->group(function () {
        Route::get('','index')->name('index');
        Route::post('save', 'save')->name('save');
    });

    //site setting
    Route::controller(SiteSettingController::class)->prefix('site')->name('site.')->group(function () {
        Route::get('','index')->name('index');
        Route::post('/update', 'update')->name('update');
    });
});

//Authenticate
Route::controller(AuthenticateController::class)->group(function () {
    Route::get('login', 'loginPage')->name('login');
    Route::post('login','loginHandle')->name('loginHandle');
});