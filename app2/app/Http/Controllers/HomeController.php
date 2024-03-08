<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index'); // Assicurati che il tuo file di vista sia in resources/views/home/index.blade.php
    }
}
//request richiesta http
//illuminare è i lcore supporto database,
// 
//il cervello dell'applicazione gestore decide cosa fare quando qualcuno preme  un pulsante;

//in request parametri modulo parametri query dati corpo file caricati

