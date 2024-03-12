<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LibriController extends Controller
{
    public function index()
    {
        // Chiamata all'API di Open Library per ottenere libri casuali
        $response = Http::get('https://openlibrary.org/search.json', [
            'q' => '*:*', // Query generica per ottenere tutti i libri
            'limit' => 15, // Numero massimo di risultati
            'sort' => 'popularity', // Ordina i risultati per popolarità
            'order' => 'desc', // Ordine decrescente (dal più popolare al meno popolare)
        ]);

        // Passa i dati alla vista
        return view('libri.index', ['libri' => $response->json()]);
    }
}