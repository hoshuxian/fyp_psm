<?php

namespace App\Http\Responses;

use App\Models\Student;
use App\Models\supervisor;
use App\Models\coordinator;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        if (Auth::user()->hasRole('student')) {
            $email=$request->email;
            $role=$request->role;
            //dd($role);
            $result= student::where('stdemail','=',$email);

            if($result != null && $role === 'student'){
                return redirect()->route('myprofile');
            }else{
                abort(403);
            }
        }

        if(Auth::user()->hasRole('coordinator')) {
            $email=$request->email;
            $role=$request->role;
            $result= coordinator::where('coordinatoremail','=',$email);
            if($result != null && $role === 'coordinator'){
                return redirect()->route('searchpsmtitle');
            } else{
                abort(403);
            }
        }
        
        if(Auth::user()->hasRole('supervisor')) {
            $email=$request->email;
            $role=$request->role;
            $result= supervisor::where('svemail','=',$email);
            if($result != null && $role === 'supervisor'){
                return redirect()->route('svmyprofile');
            } else{
                abort(403);
            }

            /*$result=$request->email;
            $deta = coordinator::where('coordinatoremail', '=', $result)->get();
            return redirect()->route('searchpsmtitle')->with(compact('deta'));
            if($result != null && $role === 'supervisor'){
                return redirect()->route('svmyprofile');
            } else{
                return redirect()->route('logout');
            }
*/
        }
    }

}