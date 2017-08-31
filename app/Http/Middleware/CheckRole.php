<?php

namespace busara\Http\Middleware;

use Closure;
use Auth;
use busara\User;
class CheckRole
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
        if (Auth::check()) {

            $user = User::find(Auth::user()->id);
            if ($user->role->name == 'Administrator') {
                //return $next($request);
                return redirect('/administrator');
            }elseif($user->role->name == 'User'){
                //return redirect('/404');
                return redirect('/dashboard');
            }elseif($user->role->name == 'Employer'){
                return redirect('/employer');
            }elseif($user->role->name == 'Employee'){
                return redirect('/employee');
            }else{
                return redirect('/');
            }
            
        }else{
            return redirect('/');
        }
        //return $next($request);
    }
}
