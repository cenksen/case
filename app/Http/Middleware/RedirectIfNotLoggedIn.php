<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect('/')->with('error', 'Bu sayfayı görüntülemek için giriş yapmanız gerekiyor.');
        }

        return $next($request);
    }
}
