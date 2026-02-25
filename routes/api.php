<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tasks', function () {
    return response()->json(['status' => 'success'], 201);
});