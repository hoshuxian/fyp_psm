<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\supervisor;
use Illuminate\Support\Facades\Auth;


class studentcontroller extends Controller
{
    //

    function svlist()
    {
        $deta = supervisor::all();
        return view('\Student\searchsupervisor',['deta'=>$deta]);
    }    

    public function svprofile($sid)
    {
        $result = supervisor::where('sid', '=', $sid)->get();
        return view('\Student\svprofile', ['result' => $result]);
    }

    function mylist()
    {
        
        $detaa = Student::where('stdemail','=',auth()->user()->email)->first();
            return view('\Student\myprofile', ['detaa' => $detaa]);
    }    

    public function updatestd(request $req,$id)
    {
    if (request()->has('image') ){
        $imageuploaded = request()->file('image');
        $imagename = time() . '.' . $imageuploaded->getClientOriginalExtension();
        $imagepath = public_path('/uploads/student');
        $imageuploaded->move($imagepath,$imagename);
    }

            $var = student::find($req->id);
            $var->id=$req->input('id');
            $var->studentName=$req->input('name');
            $var->studentID=$req->input('matric');
            $var->stdaddress=$req->input('address');
            $var->studentPhone=$req->input('phonenum');
            $var->stdemail=$req->input('email');
            $var->stdyear=$req->input('year');
            $var->stdsupervisor=$req->input('stdsupervisor');
            $var->stdpsmtitle=$req->input('stdpsmtitle');
            $var->psmType=$req->input('psmType');
        $var->image = '/uploads/student/' . $imagename;

        $var->update();
        $detaa = Student::where('id', '=', $req->id)->first();
        return view('\student\myprofile',['detaa' => $detaa])->with('successMsg','Profile Successful updated !');
    }

}
