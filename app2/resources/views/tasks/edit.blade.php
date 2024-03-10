@extends('layouts.app')

@section('content')
    <h1>Modifica Attività</h1>

    <!-- Form per la modifica di un'attività esistente -->
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