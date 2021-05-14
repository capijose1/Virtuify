<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth::user()->fullaccess=='no'):
            if(auth::user()->condition=='1'):
                return redirect('condition');
            endif;
            return $next($request);
        endif;
            return redirect('home');
    }
}
