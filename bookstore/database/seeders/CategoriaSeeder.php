<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $generi = ['Fantasy', 'Giallo', 'Thriller', 'Fantascienza', 'Romanzo'];

        foreach ($generi as $genere) {
            Categoria::create(['nome' => $genere]);
        }
    }
}