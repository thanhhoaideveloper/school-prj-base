<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CoreValueController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\StudyProgramController;
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

    //banner
    Route::controller(BannerController::class)->prefix('banner')->name('banner.')->group(function () {
        Route::get('','index')->name('index');
        Route::post('save', 'save')->name('save');
    });

    //site setting
    Route::controller(SiteSettingController::class)->prefix('site')->name('site.')->group(function () {
        Route::get('','index')->name('index');
        Route::post('update', '')->name('update');
    });

    //core
    Route::controller(CoreValueController::class)->prefix('core')->name('core.')->group(function(){
        Route::get('','index')->name('index');
        Route::post('create','create')->name('create');
        Route::get('update/{id}', 'update')->name('update');
        Route::post('update', 'handleUpdate')->name('handleUpdate');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    //address
    Route::controller(AddressController::class)->prefix('address')->name('address.')->group(function () {
        Route::get('','index')->name('index');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::get('/create','create')->name('create');
        Route::delete('/delete/{id}','destroy')->name('delete');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/create','store')->name('store');
    });

    // study program
    Route::controller(StudyProgramController::class)->prefix('study-program')->name('studyprogram.')->group(function () {
        Route::get('','index')->name('index');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::get('/create','create')->name('create');
        Route::delete('/delete/{id}','destroy')->name('delete');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/create','store')->name('store');
    });
});

//Authenticate
Route::controller(AuthenticateController::class)->group(function () {
    Route::get('login', 'loginPage')->name('login');
    Route::post('login','loginHandle')->name('loginHandle');
});