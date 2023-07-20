<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ConsultantMiddleware
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
        if (\Auth::user()->user_type == 'consultant')
        {
            if (auth()->user()->is_active == 1)
            {
                return $next($request);

            }
            else
            {
                return  redirect(route('pages.deactivate'));
            }

        }
        else
        {
            return redirect(route('pages.index'));
        }
    }
}
