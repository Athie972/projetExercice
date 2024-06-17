<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tasks = Task::all();
    return view('taches', ['tasks' => $tasks]);
});

Route::resource('tasks', TaskController::class);