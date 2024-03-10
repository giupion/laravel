<!-- tasks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Nuova Attività</h1>

    <!-- Form per la creazione di una nuova attività -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" name="title" required>
        <br>
        <label for="description">Descrizione:</label>
        <textarea name="description"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection

<!-- è un template si puo usare codice ph nelle tue viste

compilati in semplice codice php e memorizzati nella cache memorizzati nella cache finche non vengono modificati 
istruzioni condizionali e loop
-->