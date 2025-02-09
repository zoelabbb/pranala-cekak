<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//	echo "OK";
	return view('hello');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
