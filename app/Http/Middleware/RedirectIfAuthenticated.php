<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if ($this->auth->check()){
            return redirect('/ce');
        }

        /*else
            return redirect('/mat');*/

        return $next($request);

        /*if ($this->auth->check()){
            switch ($this->auth->user()->tipo) {
                case 'admin':
                    return redirect()->to('/PanelAdmin');
                    break;

                case '2':
                    return redirect()->to('/PanelMaestro');
                    break;

                case '3':
                    return redirect()->to('/PanelAlumno');
                    break;
                
                default:
                    return redirect()->to('');
                    break;
            }
            return redirect('');
        }

        return $next($request);*/

    }
}

