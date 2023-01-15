<?php

use App\Http\Controllers\Frontend\UserController;

Route::post('/register-save', [UserController::class, 'register_save']);
Route::get('/logout', [UserController::class, 'logout']);
