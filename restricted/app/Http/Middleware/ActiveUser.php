<?php

namespace App\Http\Middleware;

use App\components\Constant;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class ActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user->status != Constant::USERSTATUS_KONFIRMASI) {
            return response()->json([
                'success' => false,
                'message' => 'Akun Anda belum aktif'
            ]);
        }

        return $next($request);
    }
}
