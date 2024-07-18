<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FlashMessage
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($request->session()->has('flash_notification')) {
            $flash = $request->session()->get('flash_notification');
            $request->session()->forget('flash_notification');
            $response->headers->set('X-Flash-Notification', $flash['message']);
        }

        return $response;
    }
}
