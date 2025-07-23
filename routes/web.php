<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
//Route::[METHOD]('[PATH]', HANDLER);
//METHOD: get, post, put, delete, patch, options
//HANDLER: controller [Controller::class, 'method'], Controller::Class, closure, etc.

//CLOSURE
Route::get('/', function () {
    return redirect()->route('todos.index');
});

//CONTROLLER
// Resourceful routes for TodoController
// This will create routes for index, store, update, and destroy methods
// It will not create routes for show, edit, and create methods
// The routes will be prefixed with 'todos' and will use the TodoController
// The routes will be named 'todos.index', 'todos.store', 'todos.update', and 'todos.destroy'
    Route::resource('todos', TodoController::class)->except(['show', 'edit', 'create']);

