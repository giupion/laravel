<?php
use Illuminate\Support\Facades\Route;
// Creo un gruppo di rotte separate da quelle in web
Route::get('/testAdmin', function () {
    return view('admin');
});
//devo impostarla anche su serviceprovider
//paramentro che mi passa utente 
Route::get('/testAdmin/{id}', function () {
    $u=new stdClass();
    $u-> name='Mario';     
    $u->lastname='Rossi';
    return view('user',['obj'=>$u]);
});//passare dati a view
//devo impostarla anche su serviceprovider
//in base alla rotta mi da na vista differente

?>