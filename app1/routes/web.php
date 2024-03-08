<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route ha metodi get e post univoci che eredita da facade, in route ho rotte predefinite
Route::get('/', function () { //ogni volta che siverifica questo uri si ha la funzione di callback
});
//unarotta in laravel è un metodo statico della classe route con singleton lo evoca una sola vota

//restituisco un arotto che da qualcosa
Route::get('/greeting', function () {
    return 'Hello World';
});


Route::post('/greeting', function () {
    return view('welcome');
});

//al posto  di duplicare codice
//rotte multiple, metodi multipli http
Route::match(   ['get', 'post'], '/match', function () {  return 'Hello Match';});


Route::redirect('/here','/greeting',301);

//per la seo per mantenere stesso punteggio redirect

//google mi posiziona in prima pagina ce l'ho indicizzata su google quando utente fara ricerca du google 
//ce lho in su google e se gli spunta 4040 e se lho spostata? lato seo se il mio lik è rotto penaliza il sito per spostare url si mettere redirect

//301 e permanente poi 200 e 302 temporaneo

//con la status code capisco erroe, leggili sempre sono i tuoi amici





//route api in formato jason
Route::get('/usersAPI', function(){
    $users=[];
    $u=new stdClass();//classe predefinita std class predefinita di phpoggetto genercio 

    $u->name='Mario';
    $u->lastname='Rossi';
    array_push($users, $u);
    return $users;
    //creo una rotta per api, con un oggetto !
});

//aggiugno route lui lo sa grazie a routeserviceprovider cioe esegue al caricamneto di laravel servizio che gestisce e da le rotte applicazione
//dentro app providers
//creo rotte predefinite su routes