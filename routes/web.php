<?php

use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontendController::class)->middleware('web')->group(function(){
    Route::get('/', 'FrontHome')->name('front.home');
    Route::get('/product-details', 'productDetails')->name('product.details');
});

Route::controller(DashboardController::class)->middleware('web')->group(function(){
    Route::get('/admin/dashboard', 'dashabord')->name('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
