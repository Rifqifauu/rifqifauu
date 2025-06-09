<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
Route::get('/', [HomeController::class, 'index']);
Route::get('/jasa-website-{lokasi}', [HomeController::class, 'show']);


