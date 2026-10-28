<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CanchaController;
use App\Http\Controllers\TaskController;

Route::get('/canchas', [App\Http\Controllers\CanchaController::class, 'index']);
Route::post('/canchas',[CanchaController::class, 'store']);
Route::get('/tasks/{task}', [TaskController::class, 'show']);
Route::patch('/tasks/{task}', [TaskController::class, 'update']);
Route::delete('canchas/{id}', [CanchaController::class, 'remove']);