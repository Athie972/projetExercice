<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $tasks = Task::all();
//     return view('taches', ['tasks' => $tasks]);
// });

// Route::resource('tasks', TaskController::class);

Route::get('/',[TaskController::class,'index'])->name("index.task");
    
// supprimer une tâche
Route::post('/delete/{id}',[TaskController::class,'destroy'])->name("destroy.task");
// modifier une tâche
Route::get('/edit/{id}', [TaskController::class, 'edit'])->name("edit.task");
Route::post('/update/{id}', [TaskController::class, 'update'])->name('update.task');
// soumission d'une nouvelle tache
Route::post('/tasks', [TaskController::class, 'store'])->name('store.task');
// Route::post('/add/{id}');