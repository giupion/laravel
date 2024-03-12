<!-- resources/views/prodotti/create.blade.php -->
<h1>Crea Nuovo Prodotto</h1>

<form method="POST" action="{{ route('prodotti.store') }}" enctype="multipart/form-data">
    @csrf
    <label for="nomeprodotto">Nome Prodotto:</label>
    <input type="text" name="nomeprodotto" required>
    
    <label for="costo">Costo</label>
    <input type="text" name="costo" required>

    <label for="descrizione">Descrizione</label>
    <input type="text" name="descrizione" required>

    <label for="prezzo">Prezzo</label>
    <input type="text" name="prezzo" required>

    <button type="submit">Crea Prodotto</button>
</form>