<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/_admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('/', [App\Http\Controllers\LandingPage::class, 'index']);
Route::get('/{uri}', [App\Http\Controllers\LandingPage::class, 'index']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
