<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Layanan;
use App\Models\Portofolio;
use Inertia\Inertia;
Route::get('/', [HomeController::class, 'index']);
Route::get('/layanan', function () {
    $layanan = Layanan::all(); 
    return Inertia::render('Layanan', [
        'layanan' => $layanan,
    ]);
});
Route::get('/portofolio', function () {
    $portofolio = Portofolio::all(); 
    return Inertia::render('Portofolio', [
        'portofolio' => $portofolio,
    ]);
});
Route::get('/tentang', function () {
    return Inertia::render('About');
});

Route::get('/jasa-website-{lokasi}', [HomeController::class, 'show']);


