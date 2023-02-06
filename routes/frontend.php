<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\VeController;



// Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [FrontendController::class, 'login']);
Route::get('/register', [FrontendController::class, 'register']);

//dat ve 
// Route::get('/dat_ve', [FrontendController::class, 'dat_ve']);

// ve da dat
Route::get('/ve_da_dat/{user_id}', [VeController::class, 've_da_dat']);

// check login
Route::get('/check_login', [UserController::class, 'check_login']);


//ve
Route::get('/dat_ve/{chuyexe_id}', [VeController::class, 'dat_ve']);
Route::post('/save_ve', [VeController::class, 'save_ve']);
Route::get('/huy_ve/{ve_id}', [VeController::class, 'huy_ve']);

Route::get('/lich_su/{user_id}', [VeController::class, 'lich_su']);



Route::get('/huong_dan', [VeController::class, 'huong_dan']); // huong dan dat ve