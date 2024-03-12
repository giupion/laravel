@extends('layouts.app')

@section('content')
    <h1>Modifica Prodotto</h1>

    <form method="POST" action="{{ route('prodotti.update', $prodotto) }}">
        @csrf
        @method('PUT')

        <label for="nomeprodotto">Nome Prodotto:</label>
        <input type="text" name="nomeprodotto" value="{{ $prodotto->nomeprodotto }}" required>

        <label for="costo">Costo:</label>
        <input type="text" name="costo" value="{{ $prodotto->costo }}" required>

        <label for="prezzo">Prezzo:</label>
        <input type="text" name="prezzo" value="{{ $prodotto->prezzo }}" required>

        <label for="descrizione">Descrizione:</label>
        <textarea name="descrizione" required>{{ $prodotto->descrizione }}</textarea>

        <button type="submit">Salva Modifiche</button>
    </form>

    
@endsection