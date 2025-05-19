<?php

use App\Http\Controllers\back\DashboadrController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('front.home');

    Route::prefix('authentification')->group(function () {
        Route::get('/', [AuthController::class, 'showForm'])->name('front.showForm');
        Route::get('/restaurer-le-mot-de-passe', [AuthController::class, 'restore'])->name('front.auth.restore');

        Route::post('/register', [AuthController::class, 'register'])->name('register');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});

Route::prefix('admin_space')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboadrController::class, 'index'])->name('admin.dashboard');
});
