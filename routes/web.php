<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/' , [HomeController::class ,'index'])->name("home");
Route::get('/shop' , [HomeController::class ,'shop'])->name("shop");
Route::get('/singleProduct/{slug}',[HomeController::class ,'singleProduct'])->name("productDetails");
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/shop/{slug}',[HomeController::class,'category'])->name('category');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
