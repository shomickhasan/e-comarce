<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Accesscontroll
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       if(Auth::check()){
           if(Auth::user()->role==1 || Auth::user()->role==2 ){
            return $next($request);
           }
           if(Auth::user()->role==3){
            return redirect()->route('home'); 
           }
        
       }
       else{
           return redirect()->route('home');
       }
        
    }
}
