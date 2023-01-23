<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserType
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

        if(Auth::check())
        {
            return $next($request);
        }
        
        // $user_type = 'guest';

        // switch (@auth()->user()->userable_type) {
        //     case 'App\Models\Candidate':
        //         $user_type = 'candidate';
        //         break;
        //     case 'App\Models\Employer':
        //         $user_type = 'employer';
        //         break;

        //     default:
        //         break;
        // }
        // View::share(compact('user_type'));

        
        // return $next($request);
    }
}
