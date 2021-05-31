<?php

namespace Nextbits\Demo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;


class LogIpOnLogin
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
        if($request->email!='' && $request->password!=''){
            Log::channel('iplog')->info("Client IP: ".$_SERVER['REMOTE_ADDR']);// For just loggin
        }
        return $next($request);
    }
}
