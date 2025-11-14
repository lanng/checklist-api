<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {

    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/login/mobile', [LoginController::class, 'mobileAuthenticate']);
});

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout']);
    Route::apiResource('/companies', CompanyController::class);
});
