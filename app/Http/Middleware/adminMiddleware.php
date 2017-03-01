<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Guard;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->tipo=='1')
        return $next($request);

        return redirect('/PanelMaestro');

        /*switch ($this->auth->user()->tipo) {
            case 'admin':
                //return redirect()->to('/PanelAdmin');
                break;

            case '2':
                return redirect()->to('/PanelMaestro');
                break;

            case '3':
                return redirect()->to('/PanelAlumno');
                break;
            
            default:
                # code...
                break;
        }*/

    }
}
