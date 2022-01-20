<?php

use Illuminate\Support\Facades\Route;

Route::get('/article', [App\Http\Controllers\ArticleController::class, 'show']);
Route::get('/create', [\App\Http\Controllers\ArticleController::class, 'showCreate']);
Route::post('/create', [\App\Http\Controllers\ArticleController::class, 'store'])->name('create');
