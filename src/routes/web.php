<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use Psy\VersionUpdater\Checker;

Route::get('/', [CheckController::class, 'index']);
Route::post('/confirm', [CheckController::class, 'confirm'])->name('confirm');
Route::post('/thanks', [CheckController::class, 'thanks'])->name('thanks');
