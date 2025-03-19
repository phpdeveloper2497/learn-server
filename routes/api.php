<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::controller(AuthController::class)->group(function () {
    Route::post('/logout', 'logout');
})->middleware(['auth:sanctum']);
