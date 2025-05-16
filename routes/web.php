<?php

use App\Http\Controllers\back\DashboadrController;
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
});

Route::prefix('admin_space')->middleware('guest')->group(function () {
    Route::get('dashboard', [DashboadrController::class, 'index'])->name('admin.dashboard');
});
