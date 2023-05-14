<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminUser
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
        if(\Auth::check() && (in_array(1,\Auth::user()->roles->pluck('id')->toArray()) or in_array(2,\Auth::user()->roles->pluck('id')->toArray()) ))
        {
            return $next($request);
        }
        //  dd('lỗi');
        return redirect()->back()->with(['error'=>'You are not user Admin']);
    }
}
