<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nl', [PageController::class, 'dutch'])->name('nl');
Route::get('/en', [PageController::class, 'english'])->name('en');
