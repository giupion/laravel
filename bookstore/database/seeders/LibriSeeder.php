<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;
use App\Models\Autore;
use App\Models\Categoria; // Assicurati di importare il modello della categoria

class LibriSeeder extends Seeder
{
    public function run()
    {
        // Ottieni gli ID dell'autore e della categoria da associare ai libri
        $autoreId = Autore::first()->id; // Supponendo che l'ID dell'autore da associare sia il primo autore nel database
        $categoriaId = Categoria::first()->id; // Supponendo che l'ID della categoria da associare sia la prima categoria nel database

        $titoli = [
            "The Shining",
            "Carrie",
            "It",
            "Misery",
            "The Stand",
            "Pet Sematary",
            "The Green Mile",
            "Doctor Sleep",
            "11/22/63",
            "The Dark Tower series",
            "Harry Potter and the Philosopher's Stone",
            "Harry Potter and the Chamber of Secrets",
            "Harry Potter and the Prisoner of Azkaban",
            "Harry Potter and the Goblet of Fire",
            "Harry Potter and the Order of the Phoenix",
            "Harry Potter and the Half-Blood Prince",
            "Harry Potter and the Deathly Hallows",
            "Murder on the Orient Express",
            "Death on the Nile",
            "The Murder of Roger Ackroyd",
            "And Then There Were None",
            "The ABC Murders",
            "1984",
            "Animal Farm",
            "Homage to Catalonia",
            "The Hobbit",
            "The Lord of the Rings series",
            "The Silmarillion",
            "War and Peace",
            "Anna Karenina",
            "The Death of Ivan Ilyich",
            "Resurrection"
        ];

        foreach ($titoli as $titolo) {
            // Crea il libro associando gli ID dell'autore e della categoria
            Libro::create([
                'titolo' => $titolo,
                'autore_id' => $autoreId, // Assegna l'ID dell'autore al campo autore_id
                'categoria_id' => $categoriaId, // Assegna l'ID della categoria al campo categoria_id
            ]);
        }
    }
}