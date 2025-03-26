<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('student.register', [StudentController::class, 'Index'])->name('student.register');
Route::post('student.store', [StudentController::class, 'store'])->name('student.store');


Route::get('student.login', [LoginController::class, 'create'])->name('student.login');
Route::post('login.store', [LoginController::class, 'store'])->name('login.store');
Route::get('student.view', [LoginController::class, 'index'])->name('student.view');
