<?php
// AccessTokenMiddleware.php

namespace App\Http\Middleware;

use Closure;

class AccessTokenMiddleware
{
    public function handle($request, Closure $next)
    {
        $accessToken = $request->session()->get('access_token');

        if (!$accessToken) {
            return redirect('/referoo');
        }

        return $next($request);

        
    }
}

?>
