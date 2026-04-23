<?php

use Illuminate\Support\Facades\Route;

//Public routes

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/Contact',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('About',[\App\Http\Controllers\AboutController::class,'index']);

//User routes


//Admin routes
