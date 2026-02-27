<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Chuyển hướng trang chủ tạm thời vào trang đăng ký
Route::get('/', function () {
    return redirect()->route('register');
});

// Route hiển thị Form Đăng ký (GET)
Route::get('/register', [RegisterController::class, 'create'])->name('register');

// Route xử lý dữ liệu khi bấm nút Đăng ký (POST)
Route::post('/register', [RegisterController::class, 'store']);
