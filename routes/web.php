<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CoreValueController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\StudyProgramController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Home\HomePageController;
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

Route::controller(HomePageController::class)->group(function () {
    Route::get("/", 'index')->name('home');
});


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('', 'index')->name('dashboard');
    });

    //banner
    Route::controller(BannerController::class)->prefix('banner')->name('banner.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/create', 'store')->name('store');
    });

    //site setting
    Route::controller(SiteSettingController::class)->prefix('site')->name('site.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('update', 'update')->name('update');
    });

    //core
    Route::controller(CoreValueController::class)->prefix('core')->name('core.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/create', 'store')->name('store');
    });

    //address
    Route::controller(AddressController::class)->prefix('address')->name('address.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/create', 'store')->name('store');
    });

    // study program
    Route::controller(StudyProgramController::class)->prefix('study-program')->name('studyprogram.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/create', 'store')->name('store');
    });

    //article
    Route::controller(ArticleController::class)->prefix('article')->name('article.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::get('update/{id}', 'update')->name('update');
        Route::post('store', 'store')->name('store');
        Route::delete('delete/{id}', 'delete')->name('delete');
    });

    // rating
    Route::controller(RatingController::class)->prefix('rating')->name('rating.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::get('/create', 'create')->name('create');
        Route::delete('/delete/{id}', 'destroy')->name('delete');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/create', 'store')->name('store');
    });

    Route::group(['prefix' => 'filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

//Authenticate
Route::controller(AuthenticateController::class)->group(function () {
    Route::get('login', 'loginPage')->name('login');
    Route::post('login', 'loginHandle')->name('loginHandle');
    Route::get('logout', 'userLogout')->name('logout');
    Route::patch('password', 'changPassword')->name('password.change');
    Route::get('password', 'changePasswordPage')->name('password');
});