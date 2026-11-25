<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::redirect('/', '/employees');



Route::get('home', [HomeController::class, 'index'])->name('home');
Route::resource('employees', EmployeeController::class);
Route::get('profile', ProfileController::class)->name('profile');


Route::get('profile', ProfileController::class)->name('profile');


Route::resource('employees', EmployeeController::class);

