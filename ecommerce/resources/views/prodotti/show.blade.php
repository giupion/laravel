@extends('layouts.app')

@section('content')
    <h1>Dettagli Prodotto</h1>

    <p><strong>Nome Prodotto:</strong> {{ $prodotto->nomeprodotto }}</p>
    <p><strong>Costo:</strong> {{ $prodotto->costo }}</p>
    <p><strong>Prezzo:</strong> {{ $prodotto->prezzo }}</p>
    <p><strong>Descrizione:</strong> {{ $prodotto->descrizione }}</p>

    <a href="{{ route('prodotti.edit', $prodotto) }}">Modifica</a>

    <form action="{{ route('prodotti.destroy', $prodotto) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>
    </form>
@endsection