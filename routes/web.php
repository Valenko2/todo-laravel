<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', fn () => view('app'));
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/task', [TaskController::class, 'index']);
Route::post('/task/create', [TaskController::class, 'create'])->name('task.create');

