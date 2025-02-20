<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Http;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        $response = Http::withOptions(['verify' => false])->get('https://api.quotable.io/random');
        $quote = $response->json();

        return view('tasks.index', compact('tasks', 'quote'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'description'=> 'nullable|string',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function update(Request $request, Task $task){

        $request->validate([
            'title'=> 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }



}
