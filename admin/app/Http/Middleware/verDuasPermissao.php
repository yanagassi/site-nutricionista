<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class verDuasPermissao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }else{
            if ( Auth::user()->id == '' ){
                return redirect()->route('login');
            }else{
                return $next($request);
            }
        }
    }
}
