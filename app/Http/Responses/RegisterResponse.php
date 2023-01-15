<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\supervisor;
use App\Models\coordinator;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {
        if (Auth::user()->hasRole('student')) {
            $deta=$request->email;
            $result = Student::where('stdemail', '=', $deta)->get();
            return redirect()->route('myprofile')->with(compact('result'));
        }

        if(Auth::user()->hasRole('coordinator')) {
            $result=$request->email;
            $deta = coordinator::where('coordinatoremail', '=', $result)->get();
            return redirect()->route('searchpsmtitle')->with(compact('deta'));
        }

        if(Auth::user()->hasRole('supervisor')) {
            $result=$request->email;
            $deta = supervisor::where('svemail', '=', $result)->get();
            return redirect()->route('svmyprofile')->with(compact('deta'));
            //return redirect()->route('login');
        }

        return redirect('register');
    }

}