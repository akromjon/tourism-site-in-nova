<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class,'index'])->name('home');
Route::get('/contact', [FrontController::class,'contact'])->name('contact');
Route::get('/tours', [FrontController::class,'tours'])->name('tours');
Route::get('/gallery', [FrontController::class,'gallery'])->name('gallery');
Route::get('/{tour}', [FrontController::class,'tour_show'])->name('tours.show');
Route::get('/tag/{tag}', [FrontController::class,'tag_show'])->name('tags');
