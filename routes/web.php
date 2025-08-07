<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\UiMobil;
use App\Http\Controllers\UiMotor;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::resource('motor', UiMotor::class);
Route::resource('mobil', UiMobil::class);
Route::resource('tambahmotor', MotorController::class);
Route::resource('tambahmobil', MobilController::class);
