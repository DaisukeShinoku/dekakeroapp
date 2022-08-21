<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [AuthController::class, 'index'])->name('front.index');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/result', [WelcomeController::class, 'result']);

Route::get('/', [WelcomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/favorite', [FavoriteController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});