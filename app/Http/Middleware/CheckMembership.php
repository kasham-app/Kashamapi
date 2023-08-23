<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CheckMembership
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
        $user = $request->user();
        if($user->is_pro == false)
        {
            if($user->api_requests >= 1)
            {
                return response()->json([
                    'message' => 'Request limit exceeded. Upgrade your membership to continue enjoying unlimited requests.',
                    'code' => 429,
                    'url' => Url('/upgrade-now'), // Provide the URL to the upgrade membership page
                ], JsonResponse::HTTP_TOO_MANY_REQUESTS);
            }
        }
        return $next($request);
    }
}
