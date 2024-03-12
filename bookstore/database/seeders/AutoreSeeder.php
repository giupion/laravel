<?php
namespace Database\Seeders;
use App\Models\Autore;
use Illuminate\Database\Seeder;

class AutoreSeeder extends Seeder
{
    public function run()
    {
        // Lista di autori famosi
        $autoriFamosi = [
            'Stephen King',
            'J.K. Rowling',
            'Agatha Christie',
            'George Orwell',
            'J.R.R. Tolkien',
            'Leo Tolstoy',
            
        ];

        // Crea gli autori nel database
        foreach ($autoriFamosi as $autore) {
            Autore::firstOrCreate(['nome' => $autore]);
        }
    }
}