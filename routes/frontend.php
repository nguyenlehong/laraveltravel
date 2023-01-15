<?php

use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [FrontendController::class, 'login']);
Route::get('/register', [FrontendController::class, 'register']);
