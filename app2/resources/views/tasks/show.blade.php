<!-- tasks/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dettagli Attività</h1>

    <h2>{{ $task->title }}</h2>
    <p>{{ $task->description }}</p>

    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Modifica</a>
@endsection

