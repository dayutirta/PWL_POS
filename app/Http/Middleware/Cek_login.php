<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        //cek sudah login apa belum
        if (!Auth::check()){
           return redirect('login'); 
        }
        //simpan data user
        $user = Auth::user();
        //jika user memiliki level
        if($user->level_id== $roles){
            return $next($request);
        }
        //jika tidak memiliki akses
        return redirect('login')->with('error','Maaf anda tidak memiliki akses');
    }
}