<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layout', [HomeController::class, 'layout'])->name('layout');
Route::get('/rfq', [HomeController::class, 'rfq'])->name('rfq');
Route::post('/rfq',[HomeController::class, 'rfq_post'])->middleware('can:admin.home')->name('rfq_post');

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::get('/admin/pending', [AdminController::class, 'pending'])->middleware('can:admin.home')->name('admin.pending');
Route::get('/admin/users', [AdminController::class, 'users'])->middleware('can:admin.home')->name('admin.users');
