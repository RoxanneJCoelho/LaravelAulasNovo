<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UtilController::class, 'index'])->name('home_name');
Route::get('/hello', [UtilController::class, 'sayHello'])->name('hello_route_name');
Route::get('/curso', function(){
    return '<h1>Olá alunos SD</h1>';
});

Route::get('/modules/{name}', function($name){
    return '<h1>Este é o módulo de:'.$name.'</h1>';
});

/* routes for Users */
Route::get('/add-users', [UserController::class, 'createUser'])->name('users.add');
Route::post('/store-user', [UserController::class, 'storeUser'])->name('users.store');
Route::get('/users', [UserController::class, 'allUsers'])->name('users.all');
Route::get('/view-user/{id}', [UserController::class, 'viewUser'])->name('user.show');
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('users.delete');



/* routes for Tasks */
Route::get('/tasks', [TaskController::class, 'allTasks'])->name('tasks.all');
Route::get('/view-task/{id}', [TaskController::class, 'viewTask'])->name('task.show');
Route::get('/delete-task/{id}', [TaskController::class, 'deleteTask'])->name('task.delete');



/* routes for testing proposes */
Route::get('/test-queries', [UserController::class, 'testSqlQueries']);


Route::fallback(function(){
    return "<a href=".route('hello_route_name').">Estás perdido?</a>";
});
