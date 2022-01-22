<?php

use Illuminate\Support\Facades\Route;

Route::get('/article', [App\Http\Controllers\ArticleController::class, 'show']);
Route::get('/create', [\App\Http\Controllers\ArticleController::class, 'showCreate']);
Route::post('/create', [\App\Http\Controllers\ArticleController::class, 'store'])->name('create');
Route::get('/created', [\App\Http\Controllers\ArticleController::class, 'showArticle']);
Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'showAuth']);
Route::post('/auth', [\App\Http\Controllers\AuthController::class, 'checkUser'])->name('auth');
Route::get('/reg', [\App\Http\Controllers\RegController::class, 'showReg']);
Route::post('/reg', [\App\Http\Controllers\RegController::class, 'addUser'])->name('reg');
