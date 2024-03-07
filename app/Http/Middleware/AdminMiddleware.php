<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if user is logged in
        try {
            // Your middleware logic here
            if (!empty(Auth::check())) {
                if (Auth::user()->user_type == 1) {
                    return $next($request);
                } else {
                    Auth::logout();
                    return redirect('');
                }
            } else {
                Auth::logout();
                return redirect('');
            }
        } catch (\Exception $e) {
            // Log the exception
            Log::error($e->getMessage());
            // Handle the exception if necessary
            // ...
            // Return a response indicating the error
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
}
