<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminPanelMiddleware
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
        try{
            $auth = auth()->user()->role;
        }catch (\Exception $e){
            $auth = null;
        }

        if($auth !== 'admin')
        //if(auth()->user()->role !== 'admin')
        {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
