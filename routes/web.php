<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layout', [HomeController::class, 'layout'])->name('layout');
Route::get('/rfq', [HomeController::class, 'rfq'])->name('rfq');

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::get('/admin/pending', [AdminController::class, 'pending'])->middleware('can:admin.home')->name('admin.pending');