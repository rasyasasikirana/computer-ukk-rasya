<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Database\Seeders\PimpinanSeeder;
use Illuminate\Support\Facades\Route;

Route::resource('categories', CategoryController::class);
Route::resource('product', ProductController::class);
// Route::resource('kasir', KasirController::class)->only(['index', 'create', 'store', 'destroy']);


// Route::get('/member', function () {
//   return view('member.index');
// });
Route::get('kasir', [KasirController::class, 'index'])->name('kasir.index');
Route::get('/kasir/create', [KasirController::class, 'create'])->name('kasir.create');
Route::post('/kasir/store', [KasirController::class, 'store'])->name('kasir.store');

Route::get('member', [MemberController::class, 'index'])->name('member.index');

Route::get('pimpinan', [PimpinanController::class, 'index'])->name('pimpinan.index');
Route::get('cetak-pdf', [PDFController::class, 'generatePDF'])->name('PDF.generatePDF');

Route::get('/', function () {
    return view('layouts.login');
  });

// Route::get('/member/dashboard', function () {
//   return view('member.index');
// });

// Route::get('/produk', function () {
//   return view('admin.produk');
// })->name('produk.admin');



Route::get('/category', function () {
  return view('admin.category');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
