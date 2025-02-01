<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CharacterSelectionController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/characters', [CharacterSelectionController::class, 'index'])->name('characters');
