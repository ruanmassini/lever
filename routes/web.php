<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::prefix('/cliente')->group(function () {
    Route::get('/index', [ClienteController::Class, 'index'])->name('cliente.index');

    Route::get('/cadastrar', [ClienteController::Class, 'create'])->name('cliente.create');
    Route::post('/cadastrar', [ClienteController::Class, 'create'])->name('cliente.create');

    Route::get('/editar/{id}', [ClienteController::Class, 'update'])->name('cliente.update');
    Route::put('/editar/{id}', [ClienteController::Class, 'update'])->name('cliente.update');

    Route::delete('/excluir/{id}', [ClienteController::Class, 'delete'])->name('cliente.delete');
});

Route::prefix('/usuario')->group(function () {
    Route::get('/index', [UserController::Class, 'index'])->name('user.index');

    Route::get('/cadastrar', [UserController::Class, 'create'])->name('user.create');
    Route::post('/cadastrar', [UserController::Class, 'create'])->name('user.create');

    Route::get('/editar/{id}', [UserController::Class, 'update'])->name('user.update');
    Route::put('/editar/{id}', [UserController::Class, 'update'])->name('user.update');

    Route::delete('/excluir/{id}', [UserController::Class, 'delete'])->name('user.delete');
});
