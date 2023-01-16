@extends('coordinator')
@section('table')
<nav class="d-flex justify-content-center">
      <h1 style="color:orange;font-size:35px;">Manage Report</h1></nav><br>
      <nav class="d-flex justify-content-center" style="--bs-breadcrumb-divider: '|';font-size:18px;">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item" style="font-size:18px;"><a href="studentListC">View Report</a></li>
                  <li class="breadcrumb-item active" style="font-size:18px;">Report Overview</li>
                </ol>
              </nav>
<hr>

<script>
function printElement(print)
{
    window.print();
}
</script>
<div id="print">
<nav class="d-flex justify-content-center">
<h1>Report Overview</h1><br><br><br>
</nav>

<form action = "">

<div class="divcenter">
<nav class="d-flex justify-content-center">
  <div>
    <label>Select Type:</label>
    <select id="psmType" name="psmType">
      <option value="psm1">PSM 1</option>
      <option value="psm2">PSM 2</option>
      <option value="pta">PTA</option>
    </select>
    <button class="btn btn-primary"><i class="bi bi-search"></i> Show</button>
  </div>
</nav>
</div>
</form>


@if($psmType=='psm1')
  <div>
    <div id="psm1">
      <br>
      <nav class="d-flex justify-content-center" style="color:orange;">
            <div class="col-9">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-center">Report Overview For&nbsp<b>PSM 1</b></h5>
      <!-- Bordered Table -->
      <table class="table table-bordered">
                <thead>
                  <tr>
                    <td scope="col">Grade</th>
                    <td scope="col">A</th>
                    <td scope="col">B</th>
                    <td scope="col">C</th>
                    <td scope="col">D</th>
                    <td scope="col">E</th>
                    <td scope="col">F</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">Total</th>
                    <td>{{$A}}</td>
                    <td>{{$B}}</td>
                    <td>{{$C}}</td>
                    <td>{{$D}}</td>
                    <td>{{$E}}</td>
                    <td>{{$F}}</td>
                  </tr>
                </tbody>
              </table></div></div></div></nav>
              <!-- End Bordered Table -->
        <br><br><br><br>
        <nav class="d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
            <div class="card">
            <div class="card-body">
            <div id="container" style="width:700px;"></div><br>
        <div class="divcenter">
        <a href="" onclick="printElement(print)" class="btn btn-primary" style="float:right;"><i class="bi bi-printer"></i> Print</a>
        </div></nav>
        
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
          var grade=<?php echo json_encode($grade)?>;
          Highcharts.chart('container',{
            chart: {
              backgroundColor: 'rgba(0,0,0,0)'
            },
            title:{
              text:"<b>PSM 1</b> Report Overview"
            },
            xAxis:{
              categories: ['A', 'B', 'C', 'D', 'E', 'F']
            },
            yAxis:{
              title:{
                text:"Number of Student"
              }
            },

            series:[{
              color:'orange',
              name:"Number of Student",
              data:grade
            }],
            credits:{
              enabled: false
            },
          });
          </script>
    </div>
</div>
        </div>
        </div>
        </nav>

@elseif($psmType=='psm2')
  <div>
    <div id="psm2">
      <br>
      <nav class="d-flex justify-content-center">
            <div class="col-9">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-center">Report Overview For&nbsp<b>PSM 2</b></h5>
      <!-- Bordered Table -->
      <table class="table table-bordered">
                <thead>
                  <tr>
                    <td scope="col">Grade</th>
                    <td scope="col">A</th>
                    <td scope="col">B</th>
                    <td scope="col">C</th>
                    <td scope="col">D</th>
                    <td scope="col">E</th>
                    <td scope="col">F</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">Total</th>
                    <td>{{$A}}</td>
                    <td>{{$B}}</td>
                    <td>{{$C}}</td>
                    <td>{{$D}}</td>
                    <td>{{$E}}</td>
                    <td>{{$F}}</td>
                  </tr>
                </tbody>
              </table></div></div></div></nav>
              <!-- End Bordered Table -->
        <br><br><br><br>
        <nav class="d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
            <div class="card">
            <div class="card-body">
            <div id="container" style="width:700px;"></div><br>
        <div class="divcenter">
        <a href="" onclick="printElement(print)" class="btn btn-primary" style="float:right;"><i class="bi bi-printer"></i> Print</a>
        </div></nav>
        
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
          var grade=<?php echo json_encode($grade)?>;
          Highcharts.chart('container',{
            chart: {
              backgroundColor: 'rgba(0,0,0,0)'
            },
            title:{
              text:"<b>PSM 2</b> Report Overview"
            },
            xAxis:{
              categories: ['A', 'B', 'C', 'D', 'E', 'F']
            },
            yAxis:{
              title:{
                text:"Number of Student"
              }
            },

            series:[{
              color:'orange',
              name:"Number of Student",
              data:grade
            }],
            credits:{
              enabled: false
            },
          });
          </script>
    </div>
  </div>
  </div>
 </div>
        </nav>
  @elseif($psmType=='pta')
  <div>
    <div id="pta">
      <br>
      <nav class="d-flex justify-content-center">
            <div class="col-9">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-center">Report Overview For&nbsp<b>PTA</b></h5>
      <!-- Bordered Table -->
      <table class="table table-bordered">
                <thead>
                  <tr>
                    <td scope="col">Grade</th>
                    <td scope="col">A</th>
                    <td scope="col">B</th>
                    <td scope="col">C</th>
                    <td scope="col">D</th>
                    <td scope="col">E</th>
                    <td scope="col">F</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">Total</th>
                    <td>{{$A}}</td>
                    <td>{{$B}}</td>
                    <td>{{$C}}</td>
                    <td>{{$D}}</td>
                    <td>{{$E}}</td>
                    <td>{{$F}}</td>
                  </tr>
                </tbody>
              </table></div></div></div></nav>
              <!-- End Bordered Table -->
        <br><br><br><br>
        <nav class="d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
            <div class="card">
            <div class="card-body">
        <div id="container" style="width:700px;"></div><br>
        <div class="divcenter">
        <a href="" onclick="printElement(print)" class="btn btn-primary" style="float:right;"><i class="bi bi-printer"></i> Print</a>
        </div></nav>
        
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <script>
          var grade=<?php echo json_encode($grade)?>;
          Highcharts.chart('container',{
            chart: {
              backgroundColor: 'rgba(0,0,0,0)'
            },
            title:{
              text:"<b>PTA</b> Report Overview"
            },
            xAxis:{
              categories: ['A', 'B', 'C', 'D', 'E', 'F']
            },
            yAxis:{
              title:{
                text:"Number of Student"
              }
            },

            series:[{
              color:'orange',
              name:"Number of Student",
              data:grade
            }],
            credits:{
              enabled: false
            },
          });
          </script>
    </div>
        </div>
        </div>
        </div>
        </nav>
  @else
  <br><br><br><br><br><br><br>
  @endif

<br><br>
</div>
@endsection