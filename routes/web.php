<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pesananController;

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


Route::get('/index', function () {
    return view('index');
});
    
Route::get('/', function () {
    return view('homepage');
});

// Keep dashboard route (for direct access) but render index which includes dashboard partial
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
Route::get('/dashboard', function () {
    $totalPesanan = Pesanan::count();
    $totalProduk = Produk::count();
    $totalUser = User::count();
    $totalRevenue = Pesanan::where('status', 'terkirim')->sum('total_harga');
    $recentPesanan = Pesanan::with(['user', 'produk'])->latest()->take(5)->get();
    return view('dashboard', compact('totalPesanan', 'totalProduk', 'totalUser', 'totalRevenue', 'recentPesanan'));
});

// Routes untuk fitur pesanan
Route::get('/pesanan', [pesananController::class, 'index'])->name('pesanan.index');
Route::get('/pesanan/create', [pesananController::class, 'create'])->name('pesanan.create');
Route::post('/pesanan', [pesananController::class, 'store'])->name('pesanan.store');
Route::get('/pesanan/{pesanan}', [pesananController::class, 'show'])->name('pesanan.show');
Route::get('/pesanan/{pesanan}/edit', [pesananController::class, 'edit'])->name('pesanan.edit');
Route::put('/pesanan/{pesanan}', [pesananController::class, 'update'])->name('pesanan.update');
Route::delete('/pesanan/{pesanan}', [pesananController::class, 'destroy'])->name('pesanan.destroy');

Route::get('/tentang-kami', function () {
    return view('pesanan.tentangkami');
})->name('tentangkami');

