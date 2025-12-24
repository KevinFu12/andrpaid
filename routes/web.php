<?php

use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;

Route::view('/', 'welcome')->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/discover', [CollaboratorController::class, 'index'])
        ->name('discover');

    Route::resource('projects', ProjectController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
});

Route::get('/discover', [CollaboratorController::class, 'index'])
    ->name('discover');

Route::get('/users/{user}', [UserProfileController::class, 'show'])
    ->name('profile.show');

require __DIR__.'/auth.php';
