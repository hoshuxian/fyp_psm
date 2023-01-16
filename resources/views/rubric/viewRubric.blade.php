@extends('coordinator')
@section('content')
<!DOCTYPE html>
<html >
<style>


</style>
<body>
    


<div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size:30px;"><b><center>Rubric Type</center></b></h5>
              <button type="button" class="btn btn-outline-success" style="float:right" onclick="location.href='{{ url('/addRubric') }}'">ADD RUBRIC</button><br>
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">STUDENT PSM1</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">STUDENT PSM2</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">STUDENT PTA</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="eva1-tab" data-bs-toggle="tab" data-bs-target="#bordered-eva1" type="button" role="tab" aria-controls="eva1" aria-selected="false">EVALUATOR PSM1</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="eva2-tab" data-bs-toggle="tab" data-bs-target="#bordered-eva2" type="button" role="tab" aria-controls="eva2" aria-selected="false">EVALUATOR PSM2</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="eva3-tab" data-bs-toggle="tab" data-bs-target="#bordered-eva3" type="button" role="tab" aria-controls="eva3" aria-selected="false">EVALUATOR PTA</button>
                </li>
              </ul>

              <div class="tab-content pt-2" id="borderedTabContent">
              

                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                
                <!--display PSM1-->
                    <div class="card">
                    <div class="card-body">
                        
                        <table class="table table-striped">
                        <thead>
                        <center>
                            <tr>
                            <th rowspan="2" scope="col">No.</th>
                            <th rowspan="2" scope="col">Competency</th>
                            <th colspan="6" scope="col"><center>Scale</center></th>
                            <th rowspan="2" scope="col"><center>Weight</center></th>
                            <th rowspan="2" scope="col" style="color:#7d54d8;"><center>Action</center></th>
                            </tr>
                            
                            
                            <tr>
                            <th  scope="col">Excellent</th>
                            <th  scope="col">Good</th>
                            <th  scope="col">Moderate</th>
                            <th  scope="col">Weak</th>
                            <th  scope="col">Very Weak</th>
                            <th  scope="col">Fail</th>
                            </tr>
                            </center>
                        </thead>
                        <tbody>
                        @foreach($coorData1 as $save11)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save11->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save11->competency}}
                                </td>
                                <td>
                                    {{$save11->excellentDesc}}
                                </td>
                                <td>
                                    {{$save11->goodDesc}}
                                </td>
                                <td>
                                    {{$save11->modDesc}}
                                </td>
                                <td>
                                    {{$save11->weakDesc}}
                                </td>
                                <td>
                                    {{$save11->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save11->failDesc}}
                                </td>
                                <td><center>
                                    {{$save11->weight}}
                                    </center>
                                </td>
                                <td><center>
                                    <a href="/updateRubric/{{ $save11->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-edit-2-fill"></i></button></a>
                                    <a href="/viewRubric/{{ $save11->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-delete-bin-5-fill"></i></button></a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                    </div>
                </div>
            

                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                  
                  <div class="card">
                    <div class="card-body">
                        
                        <table class="table table-striped">
                        <thead>
                        <center>
                            <tr>
                            <th rowspan="2" scope="col">No.</th>
                            <th rowspan="2" scope="col">Competency</th>
                            <th colspan="6" scope="col"><center>Scale</center></th>
                            <th rowspan="2" scope="col"><center>Weight</center></th>
                            <th rowspan="2" scope="col" style="color:#7d54d8;"><center>Action</center></th>
                            </tr>
                            
                            
                            <tr>
                            <th  scope="col">Excellent</th>
                            <th  scope="col">Good</th>
                            <th  scope="col">Moderate</th>
                            <th  scope="col">Weak</th>
                            <th  scope="col">Very Weak</th>
                            <th  scope="col">Fail</th>
                            </tr>
                            </center>
                        </thead>
                        <tbody>
                        @foreach($coorData2 as $save2)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save2->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save2->competency}}
                                </td>
                                <td>
                                    {{$save2->excellentDesc}}
                                </td>
                                <td>
                                    {{$save2->goodDesc}}
                                </td>
                                <td>
                                    {{$save2->modDesc}}
                                </td>
                                <td>
                                    {{$save2->weakDesc}}
                                </td>
                                <td>
                                    {{$save2->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save2->failDesc}}
                                </td>
                                <td><center>
                                    {{$save2->weight}}
                                    </center>
                                </td>
                                <td><center>
                                    <a href="/updateRubric/{{ $save2->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-edit-2-fill"></i></button></a>
                                    <a href="/viewRubric/{{ $save2->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-delete-bin-5-fill"></i></button></a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        </table>

                    </div>
                    </div>
                </div> 


                <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
                 
                  <div class="card">
                    <div class="card-body">
                        
                        <table class="table table-striped">
                        <thead>
                        <center>
                            <tr>
                            <th rowspan="2" scope="col">No.</th>
                            <th rowspan="2" scope="col">Competency</th>
                            <th colspan="6" scope="col"><center>Scale</center></th>
                            <th rowspan="2" scope="col"><center>Weight</center></th>
                            <th rowspan="2" scope="col" style="color:#7d54d8;"><center>Action</center></th>
                            </tr>
                            
                            
                            <tr>
                            <th  scope="col">Excellent</th>
                            <th  scope="col">Good</th>
                            <th  scope="col">Moderate</th>
                            <th  scope="col">Weak</th>
                            <th  scope="col">Very Weak</th>
                            <th  scope="col">Fail</th>
                            </tr>
                            </center>
                        </thead>
                        <tbody>
                        @foreach($coorData3 as $save3)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save3->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save3->competency}}
                                </td>
                                <td>
                                    {{$save3->excellentDesc}}
                                </td>
                                <td>
                                    {{$save3->goodDesc}}
                                </td>
                                <td>
                                    {{$save3->modDesc}}
                                </td>
                                <td>
                                    {{$save3->weakDesc}}
                                </td>
                                <td>
                                    {{$save3->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save3->failDesc}}
                                </td>
                                <td><center>
                                    {{$save3->weight}}
                                    </center>
                                </td>
                                <td><center>
                                    <a href="/updateRubric/{{ $save3->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-edit-2-fill"></i></button></a>
                                    <a href="/viewRubric/{{ $save3->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-delete-bin-5-fill"></i></button></a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                    </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="bordered-eva1" role="tabpanel" aria-labelledby="eva1-tab">
                 
                  <div class="card">
                    <div class="card-body">
                        
                        <table class="table table-striped">
                        <thead>
                        <center>
                            <tr>
                            <th rowspan="2" scope="col">No.</th>
                            <th rowspan="2" scope="col">Competency</th>
                            <th colspan="6" scope="col"><center>Scale</center></th>
                            <th rowspan="2" scope="col"><center>Weight</center></th>
                            <th rowspan="2" scope="col" style="color:#7d54d8;"><center>Action</center></th>
                            </tr>
                            
                            
                            <tr>
                            <th  scope="col">Excellent</th>
                            <th  scope="col">Good</th>
                            <th  scope="col">Moderate</th>
                            <th  scope="col">Weak</th>
                            <th  scope="col">Very Weak</th>
                            <th  scope="col">Fail</th>
                            </tr>
                            </center>
                        </thead>
                        <tbody>
                        @foreach($coorData4 as $save4)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save4->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save4->competency}}
                                </td>
                                <td>
                                    {{$save4->excellentDesc}}
                                </td>
                                <td>
                                    {{$save4->goodDesc}}
                                </td>
                                <td>
                                    {{$save4->modDesc}}
                                </td>
                                <td>
                                    {{$save4->weakDesc}}
                                </td>
                                <td>
                                    {{$save4->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save4->failDesc}}
                                </td>
                                <td><center>
                                    {{$save4->weight}}
                                    </center>
                                </td>
                                <td><center>
                                    <a href="/updateRubric/{{ $save4->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-edit-2-fill"></i></button></a>
                                    <a href="/viewRubric/{{ $save4->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-delete-bin-5-fill"></i></button></a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                    </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="bordered-eva2" role="tabpanel" aria-labelledby="eva2-tab">
                
                  <div class="card">
                    <div class="card-body">
                        
                        <table class="table table-striped">
                        <thead>
                        <center>
                            <tr>
                            <th rowspan="2" scope="col">No.</th>
                            <th rowspan="2" scope="col">Competency</th>
                            <th colspan="6" scope="col"><center>Scale</center></th>
                            <th rowspan="2" scope="col"><center>Weight</center></th>
                            <th rowspan="2" scope="col" style="color:#7d54d8;"><center>Action</center></th>
                            </tr>
                            
                            
                            <tr>
                            <th  scope="col">Excellent</th>
                            <th  scope="col">Good</th>
                            <th  scope="col">Moderate</th>
                            <th  scope="col">Weak</th>
                            <th  scope="col">Very Weak</th>
                            <th  scope="col">Fail</th>
                            </tr>
                            </center>
                        </thead>
                        <tbody>
                        @foreach($coorData5 as $save5)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save5->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save5->competency}}
                                </td>
                                <td>
                                    {{$save5->excellentDesc}}
                                </td>
                                <td>
                                    {{$save5->goodDesc}}
                                </td>
                                <td>
                                    {{$save5->modDesc}}
                                </td>
                                <td>
                                    {{$save5->weakDesc}}
                                </td>
                                <td>
                                    {{$save5->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save5->failDesc}}
                                </td>
                                <td><center>
                                    {{$save5->weight}}
                                    </center>
                                </td>
                                <td><center>
                                    <a href="/updateRubric/{{ $save5->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-edit-2-fill"></i></button></a>
                                    <a href="/viewRubric/{{ $save5->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-delete-bin-5-fill"></i></button></a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                    </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="bordered-eva3" role="tabpanel" aria-labelledby="eva3-tab">
                 
                  <div class="card">
                    <div class="card-body">
                        
                        <table class="table table-striped">
                        <thead>
                        <center>
                            <tr>
                            <th rowspan="2" scope="col">No.</th>
                            <th rowspan="2" scope="col">Competency</th>
                            <th colspan="6" scope="col"><center>Scale</center></th>
                            <th rowspan="2" scope="col"><center>Weight</center></th>
                            <th rowspan="2" scope="col" style="color:#7d54d8;"><center>Action</center></th>
                            </tr>
                            
                            
                            <tr>
                            <th  scope="col">Excellent</th>
                            <th  scope="col">Good</th>
                            <th  scope="col">Moderate</th>
                            <th  scope="col">Weak</th>
                            <th  scope="col">Very Weak</th>
                            <th  scope="col">Fail</th>
                            </tr>
                            </center>
                        </thead>
                        <tbody>
                        @foreach($coorData6 as $save6)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save6->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save6->competency}}
                                </td>
                                <td>
                                    {{$save6->excellentDesc}}
                                </td>
                                <td>
                                    {{$save6->goodDesc}}
                                </td>
                                <td>
                                    {{$save6->modDesc}}
                                </td>
                                <td>
                                    {{$save6->weakDesc}}
                                </td>
                                <td>
                                    {{$save6->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save6->failDesc}}
                                </td>
                                <td><center>
                                    {{$save6->weight}}
                                    </center>
                                </td>
                                <td><center>
                                    <a href="/updateRubric/{{ $save6->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-edit-2-fill"></i></button></a>
                                    <a href="/viewRubric/{{ $save6->rubricID }}"><button type="button" style="background-color:white;border-color:solid white;" > <i class="ri-delete-bin-5-fill"></i></button></a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                    </div>
                    </div>
                </div>






                </div>
              </div>

            </div>
<br><br>


</body>
</html>
@endsection