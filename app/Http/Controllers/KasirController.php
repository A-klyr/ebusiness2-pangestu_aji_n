<?php

namespace App\Http\Controllers;

class KasirController extends Controller
{
    public function dashboard()
    {
        $products = \App\Models\Product::all();
        $totalProducts = \App\Models\Product::count();
        $lowStockProducts = \App\Models\Product::where('stock', '<', 10)->count();
        return view('kasir.dashboard', compact('products', 'totalProducts', 'lowStockProducts'));
    }

    public function pos()
    {
        $products = \App\Models\Product::where('status', 'active')->get();
        return view('kasir.pos', compact('products'));
    }
}


// // Route untuk user biasa
// Route::middleware(['auth'])->group(function () {
//     Route::get('/kasir/dashboard', [KasirController::class, 'dashboard'])->name('kasir.dashboard');
//     Route::get('/kasir/pos', [KasirController::class, 'pos'])->name('kasir.pos');
// });