@extends('layouts.app')

@section('content')
    <h1>Modifica Attività</h1>

    <!-- csrf per generare campo nascosto token valore univoco legato a session utente per verifica che il valore si aunivoco se tokenn non corrispondno richiestan on valuda match tra token e sessione utente Form per la modifica di un'attività esistente -->
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf 
        @method('PUT')
        <label for="title">Titolo:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Descrizione:</label>
        <textarea name="description">{{ $task->description }}</textarea>
        <br>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
@endsection