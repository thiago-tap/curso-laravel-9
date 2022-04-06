<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController
};

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');
