<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[blogController::class,'index'])->name('index');
Route::get('create',[blogController::class,'create'])->name('create');
Route::post('store',[blogController::class,'store'])->name('store');
Route::post('update/{id}',[blogController::class,'update'])->name('update');
Route::get('edit/{id}',[blogController::class,'edit'])->name('edit');
Route::get('show/{slug}',[blogController::class,'show']);
Route::delete('delete/{id}',[blogController::class,'destroy'])->name('delete');




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
