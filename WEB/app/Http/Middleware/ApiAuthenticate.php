<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class ApiAuthenticate
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
        $user = User::where('token', '=', $request->input('token'))->first();
        if($user != null){
            //return response("Hello world", 200);
            $request->user = $user;
            return $next($request);
        }else{
           return response('Unauthorized', 401);
        }
        
    }
}
