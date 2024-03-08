<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            // Aggiungi altre regole di validazione se necessario
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Attività creata con successo!');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            // Aggiungi altre regole di validazione se necessario
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Attività aggiornata con successo!');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Attività eliminata con successo!');
    }
}

//creazione progetto laravel php accettano un uri e una callback 
//routing route:list per mostrare elenco di tutte le route
//leggere e aggiornare artisan resoruce per creare rapidamente un controller
//con route sottoinsieme di azioni che controller dovrebbe gestire invece dell'intero set delle azioni da definire