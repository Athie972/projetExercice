<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

    return view('taches', [
        'tasks' => $tasks
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $task= Task::all();
        // return view('tasks');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // valider les données
        $validatedData = $request->validate([
            'title' => 'required|string|min:8',
            'description' => 'required|string|min:12',
            'status' => 'boolean',
        ]);
        // dd($request, $validatedData);
        // créer une tache
        Task::create($request->all());
        // redirection vers la page
        return redirect()->route('index.task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        // var_dump($task);
            return  view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status'=> 'false',
        ]);

        // dd($validatedData);
        $task = Task::findOrFail($id);
         $task->update($validatedData);

        return redirect()->route('index.task');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tasks = Task::find($id);
        $tasks->delete();
        return redirect()->route('index.task');
        
    }
}
