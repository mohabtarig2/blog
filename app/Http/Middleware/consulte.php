<?php

namespace App\Http\Middleware;

use App\models\companies;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class consulte
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





        if (Auth::check() && Auth::user()->roles->name=="consulte") {
            return $next($request);
        }
        abort(403);






    }
}
