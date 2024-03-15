<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use \App\Http\Controllers\TasksController;


Route::get('/', [TasksController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/task', [TaskController::class, 'index']);
Route::post('/task/create', [TaskController::class, 'create'])->name('task.create');

Route::get('/{task}/delete', [TaskController::class, 'delete'])->name('task.delete');
