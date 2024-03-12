<!-- resources/views/prodotti/index.blade.php -->
<h1>Elenco Prodotti</h1>

@foreach ($prodotti as $prodotto)
    <p>{{ $prodotto->nomeprodotto }}</p>
    <p>{{ $prodotto->costo }}</p>
    <p>{{ $prodotto->descrizione }}</p>
    <p>{{ $prodotto->prezzo }}</p>
@endforeach