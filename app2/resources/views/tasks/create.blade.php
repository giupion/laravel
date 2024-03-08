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

//artisan make:component creerà componente nella directoru app/view/components


//database mi gration creazione e modifica tabella ogni volta che si crea istanza di web app si ha 
//migrazioni assicurano che il database venga impostato in modo identico ogni volta che migraizone piu semplice creare dati per il progetto stesso
migrate-h documentazione completa

//classi seed per popolare databasedatavaseseeder call per eseguire alrte classi seed custom
pretend per vedere op sql statud per vedere le migration
-->