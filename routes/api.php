<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListLocationsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\API\RegisterController;

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

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('locations')->group(function () {
    Route::get('/', [ListLocationsController::class, 'index']);
    Route::get('/{id}', [ListLocationsController::class, 'show']);
    Route::post('/', [ListLocationsController::class, 'store']);
    Route::put('/update/{id}', [ListLocationsController::class, 'update']);
    Route::delete('/delete/{id}', [ListLocationsController::class, 'destroy']);
});

Route::prefix('reviews')->group(function () {
    Route::get('/', [ReviewsController::class, 'index']);
    Route::get('/{id}', [ReviewsController::class, 'show']);
    Route::post('/', [ReviewsController::class, 'store']);
    Route::put('/update/{id}', [ReviewsController::class, 'update']);
    Route::delete('/delete/{id}', [ReviewsController::class, 'destroy']);
});