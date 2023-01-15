<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class top20Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //display all student result
    public function index()
    {
        $result = DB::table('students')
                            ->join('psm2result', 'psm2result.studentID', '=', 'students.id')
                            ->join('psm1result', 'psm1result.studentID', '=', 'students.id')
                            ->select('students.studentName','students.id','students.stdsupervisor', 'students.stdpsmtitle','students.industry_status','psm2result.totalMark as PSM2_MARKS','psm1result.totalMark as PSM1_MARKS')
                            ->orderby('psm1result.totalMark', 'desc')
                            ->get();
        
        return view('top20.resultMain')->with('result', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //generate top 20
    public function create()
    {
        $result = DB::table('students')
        ->join('psm2result', 'psm2result.studentID', '=', 'students.id')
        ->join('psm1result', 'psm1result.studentID', '=', 'students.id')
        ->select('students.studentName','students.id','students.stdsupervisor', 'students.stdpsmtitle','students.industry_status','psm2result.totalMark as PSM2_MARKS','psm1result.totalMark as PSM1_MARKS')
        ->orderby('psm2result.totalMark', 'desc')
        ->limit(20)
        ->get();

        return view('top20.resultMain',compact('result'))->with('success', 'Top 20 generate successfully!');
        
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $result = DB::table('students')
                            ->join('psm2result', 'psm2result.studentID', '=', 'students.id')
                            ->join('psm1result', 'psm1result.studentID', '=', 'students.id')
                            ->select('students.studentName','students.id','students.stdsupervisor', 'students.stdpsmtitle','students.industry_status','psm2result.totalMark as PSM2_MARKS','psm1result.totalMark as PSM1_MARKS')
                            ->where('students.id',$id)
                            ->first();
                            return view('top20.assign_indus')->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = Student::find($id);
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
