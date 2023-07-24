<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get("/users", [UserController::class, 'index'])->middleware('users:admin')->name('users.index');
// Route::get('/home', [Home]);
Route::get("/home", [TestController::class, 'home'])->name('home');
Route::get("/about", [TestController::class, 'about'])->name('about');
Route::get("/project", [TestController::class, 'project'])->name('project');
// Todo list 
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::patch('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
