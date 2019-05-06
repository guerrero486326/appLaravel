<?php

namespace App\Http\Middleware;

use Closure;

class Capa1
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
        if(!$request->has('name')){
            dd('se detiene la vuelta');
        }

        return $next($request);
    }
}
