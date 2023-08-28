<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(($request->path()=="login" || $request->path()=="adminlogin" )&& $request->session()->has('users'))
        {
            return redirect ('/addnewitem');
        }

        return $next($request);
    }
}
