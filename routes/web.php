<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KasirController; // ⚠️ TAMBAHKAN INI - YANG KURANG!
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Route admin dipisahkan agar tidak bentrok dengan user biasa.
| Semua route product sekarang dilindungi middleware admin.
|--------------------------------------------------------------------------
*/

// Halaman awal (guest)
Route::get('/', function () {
    return view('welcome');
});

// Debug route - cek role user
Route::get('/check-role', function () {
    return auth()->check() ? auth()->user()->role : 'Not logged in';
})->middleware('auth');


// ===============================
// ROUTE KHUSUS USER BIASA
// ===============================

// Dashboard user biasa
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route kasir untuk user biasa
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/kasir/dashboard', [KasirController::class, 'dashboard'])->name('kasir.dashboard');
    Route::get('/kasir/pos', [KasirController::class, 'pos'])->name('kasir.pos');
});


// ===============================
// ROUTE KHUSUS ADMIN
// ===============================
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->group(function () {

    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Produk khusus admin
    Route::resource('products', ProductController::class);
});


// ===============================
// ROUTE PROFILE UNTUK USER LOGIN
// ===============================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route auth bawaan Breeze
require __DIR__.'/auth.php';