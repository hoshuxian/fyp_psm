<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rubric;

class rubricController extends Controller
{
    //display rubrics to coordinator at viewRubric interface
    public function coorDisplay()
    {
        $coorData1 = rubric::where('rubricType', '=','student')->where('psmType', '=','PSM1')->get();
        $coorData2 = rubric::where('rubricType', '=','student')->where('psmType', '=','PSM2')->get();
        $coorData3 = rubric::where('rubricType', '=','student')->where('psmType', '=','PTA')->get();
        $coorData4= rubric::where('rubricType', '=','evaluator')->where('psmType', '=','PSM1')->get();
        $coorData5= rubric::where('rubricType', '=','evaluator')->where('psmType', '=','PSM2')->get();
        $coorData6= rubric::where('rubricType', '=','evaluator')->where('psmType', '=','PTA')->get();
     
        return view('\rubric\viewRubric', ['coorData1' => $coorData1,'coorData2' => $coorData2,'coorData3' => $coorData3,'coorData4' => $coorData4,'coorData5' => $coorData5,'coorData6' => $coorData6]);
        
    }

    //display rubrics to coordinator at svRubric interface
    public function svDisplay()
    {
        $svData1 = rubric::where('rubricType', '=','student')->where('psmType', '=','PSM1')->get();
        $svData2 = rubric::where('rubricType', '=','student')->where('psmType', '=','PSM2')->get();
        $svData3 = rubric::where('rubricType', '=','student')->where('psmType', '=','PTA')->get();
        $svData4 = rubric::where('rubricType', '=','evaluator')->where('psmType', '=','PSM1')->get();
        $svData5 = rubric::where('rubricType', '=','evaluator')->where('psmType', '=','PSM2')->get();
        $svData6 = rubric::where('rubricType', '=','evaluator')->where('psmType', '=','PTA')->get();
        return view('\rubric\svRubric', ['svData1' => $svData1,'svData2' => $svData2,'svData3' => $svData3,'svData4' => $svData4,'svData5' => $svData5,'svData6' => $svData6]);
        
    }


    //display rubrics to student at studentRubric interface
    public function stuDisplay()
    {
    
        $stuData1 = rubric::where('rubricType', '=','student')->where('psmType', '=','PSM1')->get();
        $stuData2= rubric::where('rubricType', '=','student')->where('psmType', '=','PSM2')->get();
        $stuData3 = rubric::where('rubricType', '=','student')->where('psmType', '=','PTA')->get();
        return view('\rubric\studentRubric', ['stuData1' => $stuData1,'stuData2' => $stuData2,'stuData3' => $stuData3]);
    }


    //save the new rubric data to database
    function saveData(Request $saving)
    {
        $var= new rubric;
        $var->rubricID=$saving->id;
        $var->rubricType=$saving->rubricType;
        $var->psmType=$saving->psmType;
        $var->competency=$saving->section;
        $var->excellentDesc=$saving->excellent;
        $var->goodDesc=$saving->good;
        $var->modDesc=$saving->moderate;
        $var->weakDesc=$saving->weak;
        $var->veryweakDesc=$saving->veryweak;
        $var->failDesc=$saving->fail;
        $var->weight=$saving->weight;
        $var->save();
        return redirect('viewRubric');
    }


    //display the selected data to update in updateRubric interface
    function showUpdate($rubricID)
    {
        $data= rubric::where('rubricID', '=',$rubricID)->get();
        return view('\rubric\updateRubric',['data' => $data]);
    }


    //delete the selected rubric 
    function delete($rubricID)
    {
        //$result = rubric::where('rubricID', '=', $rubricID)->delete();
        $result = rubric::destroy($rubricID);
        return redirect('viewRubric');

    }

    //update the rubric to database
    function updateData(Request $req)
    {
        $shows= rubric::find($req->rubricID);
        $shows->rubricType=$req->input('rubricType');
        $shows->psmType=$req->input('psmType');
        $shows->competency=$req->input('section');
        $shows->excellentDesc=$req->input('excellent');
        $shows->goodDesc=$req->input('good');
        $shows->modDesc=$req->input('moderate');
        $shows->weakDesc=$req->input('weak');
        $shows->veryweakDesc=$req->input('veryweak');
        $shows->failDesc=$req->input('fail');
        $shows->weight=$req->input('weight');
        $shows->update();
        return redirect('viewRubric');
    }
    
    
}
