<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return redirect()->route('todos.index');
});

// Route::middleware(['auth'])->group(function () {
    Route::resource('todos', TodoController::class)->except(['show', 'edit', 'create']);
// });
