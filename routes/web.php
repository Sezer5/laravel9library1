<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController as HomeController;
use App\Http\Controllers\admin\SettingsController as SettingsController;
use App\Http\Controllers\admin\AdminuserController as AdminuserController;
use App\Http\Controllers\admin\ProfileController as ProfileController;

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
Route::get('/logoutuser' ,[HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin' ,'admin.login')->name('loginadmin');
Route::view('/' ,'admin.login')->name('loginadmin');


Route::post('/loginadmincheck' ,[HomeController::class,'loginadmincheck'])->name('loginadmincheck');
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/' , [HomeController::class,'index'])->name('index');

//SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER
//SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER
//SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER
//SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER SETTINGS CONTROLLER
    Route::prefix('/settings')->name('settings.')->controller(SettingsController::class)->group(function () {

        Route::get('/' ,'index')->name('index');
        Route::get('/create' ,'create')->name('create');
        Route::post('/store' ,'store')->name('store');
        Route::get('/edit/{id}' ,'edit')->name('edit');
        Route::post('/update/{id}' ,'update')->name('update');
        Route::get('/destroy/{id}' , 'destroy')->name('destroy');
        Route::get('/show/{id}' , 'show')->name('show');


    });

    Route::prefix('/profiles')->name('profiles.')->controller(ProfileController::class)->group(function () {

        Route::get('/' ,'index')->name('index');
        Route::post('/update' ,'update')->name('update');



    });

    Route::prefix('/adminuser')->name('adminuser.')->controller(AdminuserController::class)->group(function () {

        Route::get('/' ,'index')->name('index');
        Route::get('/create' ,'create')->name('create');
        Route::post('/store' ,'store')->name('store');
        Route::get('/edit/{id}' ,'edit')->name('edit');
        Route::post('/update/{id}' ,'update')->name('update');
        Route::get('/destroy/{id}' , 'destroy')->name('destroy');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::get('/destroyrole/{uid}/{rid}' , 'destroyrole')->name('destroyrole');
        Route::post('/addrole' ,'addrole')->name('addrole');


    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
