<?php

use Illuminate\Support\Facades\Route;
Route::group(['namespace' => 'App\Http\Controllers\Task', 'middleware' => 'auth'], function ()
{
    Route::get('/', 'ViewController')->name('tasks');

    Route::get('/task', 'AddController')->name('task.add');
    Route::post('/task/create', 'CreateController')->name('task.create');

    Route::get('/{task}/delete', 'DeleteController')->name('task.delete');

    Route::get('/{task}/update', 'EditController')->name('task.edit');
    Route::post('/{task}/task/update', 'UpdateController')->name('task.update');


});

Route::group(['namespace' => 'App\Http\Controllers\Category', 'middleware' => 'auth'], function ()
{
    Route::get('/categories', 'ViewController')->name('categories');

    Route::get('/category/add', 'AddController')->name('category.add');
    Route::post('/category/create', 'CreateController')->name('category.create');

    Route::get('category/{category}/delete', 'DeleteController')->name('category.delete');

    Route::get('category/{category}/task', 'TaskCategoryViewController')->name('tasks.category');
});

Route::group(['namespace' => 'App\Http\Controllers\Register', 'middleware' => 'guest'], function ()
{
    Route::get('/register', 'RegisterController')->name('register');
    Route::post('/register/create', 'CreateUserController')->name('create.register');

    Route::get('/auth', 'AuthController')->name('auth');
    Route::post('/auth/login', 'LoginController')->name('login');
});
Route::get('/exit', [\App\Http\Controllers\Register\ExitController::class, 'exit'])->name('exit');

