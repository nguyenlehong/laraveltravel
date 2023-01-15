<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\UserController;

Route::get('/admin', [BackendController::class, 'login']);
Route::post('/check-login-admin', [BackendController::class, 'check_login_admin']);
Route::get('/logout-admin', [BackendController::class, 'logout_admin']);


//user

Route::get('/list-user', [UserController::class, 'list_user']);
