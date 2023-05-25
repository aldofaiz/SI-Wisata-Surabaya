<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebController::class, 'index']);
Route::get('/wisata/{id}', [WebController::class, 'detail']);
Route::get('/kategori/{id}', [WebController::class, 'category']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/data-wisata', [AdminController::class, 'dataWisata'])->name('data_wisata');
    Route::get('/create-wisata', [AdminController::class, 'createWisata'])->name('create_wisata');
    Route::get('/data-location-category', [AdminController::class, 'dataLocationCategory'])->name('data_location_category');
    Route::get('/create-location-category', [AdminController::class, 'createLocationCategory'])->name('create_location_category');
    Route::get('/data-review', [AdminController::class, 'dataReview'])->name('data_review');
});

Auth::routes();

