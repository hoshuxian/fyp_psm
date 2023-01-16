@extends('student')
@section('content')
<!DOCTYPE html>
<html >
<body>


<div class="card">
            <div class="card-body">
            <h5 class="card-title" style="font-size:30px;"><b><center>Rubric Type</center></b></h5>

              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">PSM1</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PSM2</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">PTA</button>
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
                        @foreach($stuData1 as $save)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save->competency}}
                                </td>
                                <td>
                                    {{$save->excellentDesc}}
                                </td>
                                <td>
                                    {{$save->goodDesc}}
                                </td>
                                <td>
                                    {{$save->modDesc}}
                                </td>
                                <td>
                                    {{$save->weakDesc}}
                                </td>
                                <td>
                                    {{$save->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save->failDesc}}
                                </td>
                                <td><center>
                                    {{$save->weight}}
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
                  <!--display PSM2-->
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
                        @foreach($stuData2 as $save)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save->competency}}
                                </td>
                                <td>
                                    {{$save->excellentDesc}}
                                </td>
                                <td>
                                    {{$save->goodDesc}}
                                </td>
                                <td>
                                    {{$save->modDesc}}
                                </td>
                                <td>
                                    {{$save->weakDesc}}
                                </td>
                                <td>
                                    {{$save->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save->failDesc}}
                                </td>
                                <td><center>
                                    {{$save->weight}}
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
                  <!--display PTA-->
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
                        @foreach($stuData3 as $save)
                            <tr>
                                <th  scope="row"><center>
                                    {{$save->rubricID}}
                                    </center>
                                </th>   
                                <td>
                                    {{$save->competency}}
                                </td>
                                <td>
                                    {{$save->excellentDesc}}
                                </td>
                                <td>
                                    {{$save->goodDesc}}
                                </td>
                                <td>
                                    {{$save->modDesc}}
                                </td>
                                <td>
                                    {{$save->weakDesc}}
                                </td>
                                <td>
                                    {{$save->veryweakDesc}}
                                </td>
                                <td>
                                    {{$save->failDesc}}
                                </td>
                                <td><center>
                                    {{$save->weight}}
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



</body>
</html>
@endsection