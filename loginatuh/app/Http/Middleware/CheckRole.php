<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        if (!Gate::forUser(auth()->user())->check($role)) {
            abort(403, 'Accesso negato');
        }

        return $next($request);
    }
}

//gestisce autorizazione utente se utente ha il ruolo allora...accesso a