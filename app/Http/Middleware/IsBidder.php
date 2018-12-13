<?php
namespace App\Http\Middleware;
use Closure;
class IsBidder
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
        if(auth()->user()->isBidder()) {
            return $next($request);
        }
        else if(auth()->user()->isAdmin()) {
            return $next($request);
        }
        return redirect('index');
    	
    }
}