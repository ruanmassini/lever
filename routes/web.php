<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::prefix('/cliente')->group(function (){
    Route::get('/index', [ProductController::Class, 'index'])->name('cliente.index');

    // Route::get('');
});