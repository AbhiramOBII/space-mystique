<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-space-mystique', function () {
    return view('about');
})->name('about');

Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class)->names('admin.services');
        Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class)->names('admin.projects');
    });
});
