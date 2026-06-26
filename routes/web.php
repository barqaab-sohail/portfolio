<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Public portfolio pages and contact form endpoint.
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contactusform', [HomeController::class, 'contactusform'])->name('contactusform');
Route::get('/project_detail/{id}', [HomeController::class, 'project_detail'])->name('project_detail');

// Authentication routes for the Filament admin area.
require __DIR__ . '/auth.php';
