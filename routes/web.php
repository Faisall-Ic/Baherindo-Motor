<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\UiMobil;
use App\Http\Controllers\UiMotor;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::resource('motor', MotorController::class);
Route::resource('mobil', MobilController::class);
