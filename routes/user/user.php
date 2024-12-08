<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/user/register',[UserController::class,'create'])->name("user.register");
Route::post('/user/register',[UserController::class,'store'])->name("user.store");

