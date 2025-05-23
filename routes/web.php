<?php

use App\Http\Controllers\back\DashboadrController;
use App\Http\Controllers\back\DeclarationController;
use App\Http\Controllers\back\NaissanceController;
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
    });
});

Route::prefix('admin_space')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboadrController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('declarations')->group(function () {
        Route::controller(DeclarationController::class)->group(function () {
            Route::get('/', 'index')->name('declaration.index');

            Route::prefix('/citoyens')->group(function (){
                Route::get('/', 'citoyensAll')->name('declaration.citoyens.all');
                Route::get('/nouveau', 'citoyenShowCreateForm')->name('declaration.citoyens.create');
                Route::post('/nouveau', 'citoyenSaveForm')->name('declaration.citoyens.save');
                Route::get('/update/{citoyen}', 'citoyenShowUpdateForm')->name('declaration.citoyens.updateForm');
                Route::patch('/update', 'citoyenUpdateForm')->name('declaration.citoyens.update');
                Route::delete('/delete/{citoyen}', 'citoyenDelete')->name('declaration.citoyens.delete');
            });
        });

        Route::controller(NaissanceController::class)->group(function () {
            Route::prefix('/naissance')->group(function (){
                Route::get('/', 'all')->name('declaration.naissance.all');
                Route::get('/nouveau', 'showCreateForm')->name('declaration.naissance.create');
                Route::post('/nouveau', 'saveForm')->name('declaration.naissance.save');
                Route::get('/update/{naissance}', 'showUpdateForm')->name('declaration.naissance.updateForm');
                Route::patch('/update', 'updateForm')->name('declaration.naissance.update');
                Route::delete('/delete/{naissance}', 'delete')->name('declaration.naissance.delete');
            });
        });


    });
});
