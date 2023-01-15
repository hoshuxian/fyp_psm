<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\supervisor;

class supervisorcontroller extends Controller
{
    //

    function studentlist()
    {
        $deta = Student::all();
        return view('\supervisor\searchstudentlist',['deta'=>$deta]);
    }

    public function viewprofile($id)
    {
        $result = Student::where('id', '=', $id)->get();
        return view('\supervisor\viewstudentprofile', ['result' => $result]);
    }

    function svmyprofile()
    {
        $detaa = supervisor::where('svemail','=',auth()->user()->email)->first();
        return view('\supervisor\svmyprofile',['detaa'=>$detaa]);
    }

    public function updateprofile(request $req,$sid)
    {
    if (request()->has('image') ){
        $imageuploaded = request()->file('image');
        $imagename = time() . '.' . $imageuploaded->getClientOriginalExtension();
        $imagepath = public_path('/uploads/student');
        $imageuploaded->move($imagepath,$imagename);
    }

            $var = supervisor::find($req->sid);
            $var->sid=$req->input('sid');
            $var->supervisorID=$req->input('supervisorid');
            $var->svbiography=$req->input('biography');
            $var->svname=$req->input('name');
            $var->svphonenum=$req->input('phonenum');
            $var->svemail=$req->input('email');
            $var->svexpertise=$req->input('expertise');
            $var->image = '/uploads/student/' . $imagename;
            $var->update();
            $detaa = supervisor::where('sid', '=', $req->sid)->first();
            $req->session()->put('detaa',$detaa);
            return view('\supervisor\svmyprofile',['detaa' => $detaa])->with('successMsg','Profile Successful updated !');
    }
}
