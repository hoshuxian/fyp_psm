<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class top20Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //display all student result (order by matric id)
    public function index()
    {
        $result = Student::join('psm2result', 'psm2result.studentID', '=', 'students.id')
                            ->orderby('students.studentID', 'asc')
                            ->get(['students.studentName','students.studentID','students.stdsupervisor', 'students.stdpsmtitle','students.industry_status','psm2result.totalMark as PSM2_MARKS']);
        return view('top20.resultMain',compact('result'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //generate top 20
    public function create()
    {
        $result = Student::join('psm2result', 'psm2result.studentID', '=', 'students.id')
                            ->orderby('psm2result.totalMark', 'desc')
                            ->limit(20)
                            ->get(['students.studentName','students.studentID','students.stdsupervisor', 'students.stdpsmtitle','students.industry_status','psm2result.totalMark as PSM2_MARKS','students.id']);
        return view('top20.resultMain',compact('result'))->with('success', 'Top 20 generate successfully!');
        
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Student::join('psm2result', 'psm2result.studentID', '=', 'students.id')
                            ->where('students.id',$id)
                            ->first(['students.studentName','students.studentID','students.stdsupervisor', 'students.stdpsmtitle','students.industry_status','psm2result.totalMark as PSM2_MARKS','students.id']);
                            return view('top20.assign_indus',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $studentID)
    {
        $result = Student::find($studentID);
        $result->industry_status = $request->input('industry_status');
        $result->save();
        return redirect('/main')->with('success', 'Student industry updated successfully!');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
