<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
Route::group(['namespace' => 'App\Http\Controllers\Task'], function ()
{
    Route::get('/', 'ViewController')->name('tasks');

    Route::get('/task', 'AddController')->name('task.add');
    Route::post('/task/create', 'CreateController')->name('task.create');

    Route::get('/{task}/delete', 'DeleteController')->name('task.delete');

    Route::get('/{task}/update', 'EditController')->name('task.edit');
    Route::post('/{task}/task/update', 'UpdateController')->name('task.update');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

});



