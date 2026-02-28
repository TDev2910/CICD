<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Chuyển hướng trang chủ tạm thời vào trang đăng ký
Route::get('/', function () {
    return redirect()->route('register');
});

// Route hiển thị Form Đăng ký (GET)
Route::get('/register', [RegisterController::class, 'create'])->name('register');

// Route xử lý dữ liệu khi bấm nút Đăng ký (POST)
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
