<?php

namespace App\Http\Middleware;

use App\Helpers\ApiResponse;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle( $request,Closure $next,...$gurade): ?string
    {
        if (Auth::guest()){
            return ApiResponse::error(404,'UnAuthorized');
        }elseif ($request->bearerToken()!=Auth::user()->token){
            return ApiResponse::error(404,'UnAuthorized');
        }else
            return $next($request);
    }
}
