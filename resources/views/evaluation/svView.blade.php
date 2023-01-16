<<<<<<< HEAD
@extends('supervisor')

@section('table')

<div class="container mt-2">
  <h2>Supervisor's Evaluation</h2><br><br>


  <!-- Default Tabs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
    <button class="nav-link active" id="psm1-tab" data-bs-toggle="tab" data-bs-target="#psm1" type="button" role="tab" aria-controls="psm1" aria-selected="true">PSM 1</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="psm2-tab" data-bs-toggle="tab" data-bs-target="#psm2" type="button" role="tab" aria-controls="psm2" aria-selected="false">PSM 2</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pta-tab" data-bs-toggle="tab" data-bs-target="#pta" type="button" role="tab" aria-controls="pta" aria-selected="false">PTA</button>
    </li>
  </ul>
  <div class="tab-content pt-2" id="myTabContent">
    <br>
    <div class="tab-pane fade show active" id="psm1" role="tabpanel" aria-labelledby="psm1-tab">
      <div class="row">
        <div class="col-md-11"><h4 style="font-weight:bold;text-align:right";>Deadline</h4></div><br>
        <div class="col-md-11"><h4 style="text-align:right";>{{ $deadlinePsm1->svDeadline }}</h4></div>
      </div><br><br>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Matric No</th>
            <th scope="col">Name</th>
            <th scope="col">SV Marks</th>
            <th scope="col">Evaluator Marks</th>
            <th scope="col">Total Marks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($psm1marks as $psm1mark)
          <?php 
            $svmark1 = (float) $psm1mark->svMark1;
            $svmark2 = (float) $psm1mark->svMark2;
            $svmarks = $svmark1 + $svmark2;
          ?>
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $psm1mark->studentID }}</td>
            <td>{{ $psm1mark->studentName }}</td>
            <td>{{ $svmarks }}</td>
            <td>{{ $psm1mark->evMark }}</td>
            <td>{{ $psm1mark->totalMark }}</td>
            <td><a href="{{ url('svEdit/'.$psm1mark->resultID.'/'.$psm1mark->psmType)}}"><button class="btn btn-outline-primary">Update</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade" id="psm2" role="tabpanel" aria-labelledby="psm2-tab">
      <div class="row">
      <div class="col-md-11"><h4 style="font-weight:bold;text-align:right";>Deadline</h4></div><br>
        <div class="col-md-11"><h4 style="text-align:right";>{{ $deadlinePsm2->svDeadline }}</h4></div>
      </div><br><br>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Matric No</th>
            <th scope="col">Name</th>
            <th scope="col">SV Marks</th>
            <th scope="col">Evaluator Marks</th>
            <th scope="col">Total Marks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($psm2marks as $psm2mark)
          <?php 
            $svmark1 = (float) $psm2mark->svMark1;
            $svmark2 = (float) $psm2mark->svMark2;
            $svmarks = $svmark1 + $svmark2;
          ?>
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $psm2mark->studentID }}</td>
            <td>{{ $psm2mark->studentName }}</td>
            <td>{{ $svmarks }}</td>
            <td>{{ $psm2mark->evMark }}</td>
            <td>{{ $psm2mark->totalMark }}</td>
            <td><a href="{{ url('svEdit/'.$psm2mark->resultID.'/'.$psm2mark->psmType)}}"><button class="btn btn-outline-primary">Update</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade" id="pta" role="tabpanel" aria-labelledby="pta-tab">
      <div class="row">
      <div class="col-md-11"><h4 style="font-weight:bold;text-align:right";>Deadline</h4></div><br>
        <div class="col-md-11"><h4 style="text-align:right";>{{ $deadlinePta->svDeadline }}</h4></div>
      </div><br><br>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Matric No</th>
            <th scope="col">Name</th>
            <th scope="col">SV Marks</th>
            <th scope="col">Evaluator Marks</th>
            <th scope="col">Total Marks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($ptamarks as $ptamark)
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $ptamark->studentID }}</td>
            <td>{{ $ptamark->studentName }}</td>
            <td>{{ $ptamark->svMark }}</td>
            <td>{{ $ptamark->evMark }}</td>
            <td>{{ $ptamark->totalMark }}</td>
            <td><a href="{{ url('svEdit/'.$ptamark->resultID.'/'.$ptamark->psmType)}}"><button class="btn btn-outline-primary">Update</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div><!-- End Default Tabs -->

</div><br>
@endsection