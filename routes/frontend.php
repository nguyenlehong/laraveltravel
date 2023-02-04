<?php

use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [FrontendController::class, 'login']);
Route::get('/register', [FrontendController::class, 'register']);

//dat ve 
Route::get('/dat_ve', [FrontendController::class, 'dat_ve']);

// ve da dat
Route::get('/ve_da_dat', [FrontendController::class, 've_da_dat']);