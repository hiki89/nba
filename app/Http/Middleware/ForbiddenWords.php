<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenWords
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
        $forbiddenWords = ["hate", "idiot", "stupid"];

        foreach($forbiddenWords as $word) {
            if(strstr($request->content, $word)) {
                return response(view('auth.forbidden-comment'));
            }
        }
        return $next($request);
    }
}
