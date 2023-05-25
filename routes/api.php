<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LocationCategoryController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('locations')->group(function () {
    Route::get('/', [LocationController::class, 'index']);
    Route::get('/{id}', [LocationController::class, 'show']);
    Route::post('/', [LocationController::class, 'store']);
    Route::put('/update/{id}', [LocationController::class, 'update']);
    Route::delete('/delete/{id}', [LocationController::class, 'destroy']);
});

Route::prefix('categories')->group(function (){
    Route::get('/', [LocationCategoryController::class, 'index']);
    Route::get('/{id}', [LocationCategoryController::class, 'show']);
});

Route::prefix('reviews')->group(function (){
    Route::get('/', [ReviewController::class, 'index']);
    Route::get('/{id}', [ReviewController::class, 'show']);
    Route::post('/', [ReviewController::class, 'store']);
    Route::put('/update/{id}', [ReviewController::class, 'update']);
    Route::delete('/delete/{id}', [ReviewController::class, 'destroy']);
});