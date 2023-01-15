<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\supervisor;
use App\Models\User;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Image;


class coordinatorcontroller extends Controller
{
    //
    function createstudent(Request $req)
    {
        
        if (request()->has('image')){
            $imageuploaded = request()->file('image');
            $imagename = time() . '.' . $imageuploaded->getClientOriginalExtension();
            $imagepath = public_path('/uploads/student');
            $imageuploaded->move($imagepath,$imagename);
        }

            $var = new student;
            $var->studentName=$req->name;
            $var->studentID=$req->matric;
            $var->stdaddress=$req->address;
            $var->studentPhone=$req->phonenum;
            $var->stdemail=$req->email;
            $var->stdyear=$req->year;
            $var->stdsupervisor=$req->supervisor;
            $var->stdpsmtitle=$req->psmtitle;
            $var->psmType=$req->psmtype;
            $var->image = '/uploads/student/' . $imagename;
            $result=$req->matric;
            $deta= Student::where('studentID', '=', $result)->first();
            if(( $deta ) != null)
            {
                return redirect('searchstudent')->with('FailedMsg','Profile Failed to created !');
            }else{
            $var->save();
            return redirect('searchstudent')->with('successMsg','Profile Successful created !');
            }
    
        }


     function viewstudentlist()
    {
        $deta = Student::all();
        return view('\Coordinator\searchstudent',['deta'=>$deta]);
    }

    public function viewstudentprofile($id)
    {
        $result = Student::where('id', '=', $id)->get();
        
        return view('\Coordinator\viewstudent', ['result' => $result]);
    }

    public function deletestudentprofile($id)
    {
        $result = Student::where('id', '=', $id)->delete();
        return redirect('searchstudent')->with('successMsg','Profile Successful deleted !');
    }

    public function updatestdprofile(request $req,$id)
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
        $result = Student::where('id', '=', $req->id)->get();
        return view('\Coordinator\viewstudent',['result' => $result])->with('successMsg','Profile Successful updated !');
    }

    function viewpsmlist()
    {
        $deta = Student::all();
        return view('\Coordinator\searchpsmtitle',['deta'=>$deta]);
    }

    function createsupervisor(Request $req)
    {
        if (request()->has('image')){
            $imageuploaded = request()->file('image');
            $imagename = time() . '.' . $imageuploaded->getClientOriginalExtension();
            $imagepath = public_path('/uploads/student');
            $imageuploaded->move($imagepath,$imagename);
        }

        $var = new supervisor;
        $var->supervisorID=$req->id;
        $var->svbiography=$req->biography;
        $var->svname=$req->name;
        $var->svphonenum=$req->phonenum;
        $var->svemail=$req->email;
        $var->svexpertise=$req->expertise;
        $var->image = '/uploads/student/' . $imagename;
        $var->save();
        return redirect('searchsvlist')->with('successMsg','Profile Successful created !');

    }

    function viewsvlist()
    {
        $deta = supervisor::all();
        return view('\Coordinator\searchsvlist',['deta'=>$deta]);
    }


    function viewsvprofile($sid)

    {
        $result = supervisor::where('sid', '=', $sid)->get();
        return view('\Coordinator\viewsvprofile', ['result' => $result]);
    }


    function deletesvprofile($sid)

    {
        $result = supervisor::where('sid', '=', $sid)->delete();
        return redirect('searchsvlist')->with('successMsg','Profile Successful deleted !');
    }

    function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function updatesvprofile(request $req,$sid)
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
            $result = supervisor::where('sid', '=', $req->sid)->get();
            return view('\Coordinator\viewsvprofile',['result' => $result])->with('successMsg','Profile Successful updated !');
    }
}
