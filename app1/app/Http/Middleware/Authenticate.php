<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}

//univocita rotta con post sa cosa fare quandoè post una logica con get un altra
//uriuguale method cambia
//Route::get('/posts/{id}', 'PostController@show');

//In questo esempio, stiamo dicendo a Laravel di indirizzare tutte le richieste GET con un'URI come "/posts/{id}" al metodo show nel controller PostController. L'{id} è un parametro dinamico che può essere catturato e utilizzato all'interno del controller.