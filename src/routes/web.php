<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use Psy\VersionUpdater\Checker;

Route::get('/', [CheckController::class, 'index']);
Route::post('/confirm', [CheckController::class, 'confirm']);
Route::post('/store', [CheckController::class, 'store']);
Route::get('/login', [CheckController::class, 'login']);
Route::get('/register', [CheckController::class, 'register']);

