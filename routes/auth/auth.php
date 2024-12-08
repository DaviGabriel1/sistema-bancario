<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/auth/register',[AuthController::class,'showRegisterForm'])->name("auth.register");
Route::post('/auth/register',[AuthController::class,'registerUser'])->name("auth.registerUser");

Route::get('/auth/login',[AuthController::class,'showLoginForm'])->name("auth.getLogin");
Route::post('/auth/login',[AuthController::class,'loginUser'])->name("auth.loginPost");