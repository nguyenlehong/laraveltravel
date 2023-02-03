<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\XeController;
use App\Http\Controllers\Backend\LoTrinhController;



Route::get('/admin', [BackendController::class, 'login']);
Route::post('/check-login-admin', [BackendController::class, 'check_login_admin']);
Route::get('/logout-admin', [BackendController::class, 'logout_admin']);


//user
Route::get('/list-user', [UserController::class, 'list_user']);


//xe
Route::get('/list-xe', [XeController::class, 'index']);
Route::resource('/xe', XeController::class);

// lo trinh
Route::resource('/lotrinh', LoTrinhController::class);


// lich chay
Route::get('/list-lichChay', [CarController::class, 'list_lichChay']);