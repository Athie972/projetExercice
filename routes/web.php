<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tasks = Task::all();
    return view('taches', ['tasks' => $tasks]);
});

Route::resource('tasks', TaskController::class);
// supprimer une tâche
Route::post('/delete/{id}',[TaskController::class,'destroy'])->name("destroy.task");
// modifier une tâche
Route::post('/edit/{id}', [TaskController::class, 'edit'])->name("edit.task");
Route::post('/update/{id}', [TaskController::class, 'update'])->name('update.task');
// soumission d'une nouvelle tache
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
// Route::post('/add/{id}');