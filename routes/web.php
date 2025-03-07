<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::post('lang', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/personal-information', [PersonalInformationController::class, 'index'])->name('personal-information.index');
Route::get('/personal-information/edit', [PersonalInformationController::class, 'edit'])->name('personal-information.edit');
Route::put('/personal-information/update', [PersonalInformationController::class, 'update'])->name('personal-information.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
