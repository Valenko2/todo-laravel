<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use \App\Http\Controllers\TasksController;
use App\Http\Controllers\CategoryController;

Route::get('/', [TasksController::class, 'index'])->name('tasks');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/task', [TaskController::class, 'index'])->name('task.add');
Route::post('/task/create', [TaskController::class, 'create'])->name('task.create');

Route::get('/{task}/delete', [TaskController::class, 'delete'])->name('task.delete');

Route::get('/{task}/update', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/{task}/task/update', [TaskController::class, 'update'])->name('task.update');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
