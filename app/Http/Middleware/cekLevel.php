
<?php
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class cekLevel
{
    public function handle(Request $request, Closure $next, ...$levels): Response
    {
        if (Auth::check() && in_array(Auth::user()->level, $levels)) {
            return $next($request);
        }
        
        // Memberikan level default jika user tidak terautentikasi
        $defaultLevel = 'user';
        if (Auth::guest()) {
            $request->merge(['user' => (object) ['level' => $defaultLevel]]);
            return $next($request);
        }
        
        return redirect('/login')->with('errorLevel', 'Login ini khusus admin & operator');
    }
}
