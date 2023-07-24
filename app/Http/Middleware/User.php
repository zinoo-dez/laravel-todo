<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class User
{

    public $name;
    public function handle(Request $request, Closure $next, $name): Response
    {

        if ($name !== "admin") {
            return redirect()->route('welcome');
        }
        return $next($request);
    }
}
