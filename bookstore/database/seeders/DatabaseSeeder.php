<?php
use Database\Seeders\AutoreSeeder;
use Database\Seeders\CategoriaSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\LibriSeeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AutoreSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(LibriSeeder::class);
    }
}