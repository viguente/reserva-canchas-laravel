<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CanchaController;

Route::get('/canchas', [App\Http\Controllers\CanchaController::class, 'index']);