<?php
namespace App\Http\Middleware;
use Closure;
class AgeCheck
{
/**
* Handle an incoming request.
* Traiter une requête entrante.
* @param \Illuminate\Http\Request $request
* @param \Closure $next
* @return mixed
*/
public function handle($request, Closure $next)
{
    if($request->age < 18){
        return redirect('/');
        }else{
        return $next($request);
        }
}
}
