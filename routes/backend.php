<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CarController;


Route::get('/admin', [BackendController::class, 'login']);
Route::post('/check-login-admin', [BackendController::class, 'check_login_admin']);
Route::get('/logout-admin', [BackendController::class, 'logout_admin']);


//user
Route::get('/list-user', [UserController::class, 'list_user']);


//car
Route::get('/list-car', [CarController::class, 'list_car']);

// tuyen xe
Route::get('/list-tuyenxe', [CarController::class, 'list_tuyenxe']);

// lich chay
Route::get('/list-lichChay', [CarController::class, 'list_lichChay']);


