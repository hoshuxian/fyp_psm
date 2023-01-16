<<<<<<< HEAD
@extends('supervisor')

@section('table')

<div class="container mt-2">
  <h2>Evaluator's Evaluation</h2><br><br>

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
        <div class="col-md-11"><h4 style="text-align:right";>{{ $deadlinePsm1->evDeadline }}</h4></div>
      </div><br><br>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Matric No</th>
            <th scope="col">Name</th>
            <th scope="col">Evaluator Marks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($psm1marks as $psm1mark)
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $psm1mark->studentID }}</td>
            <td>{{ $psm1mark->studentName }}</td>
            <td>{{ $psm1mark->evMark }}</td>
            <td><a href="{{ url('evEdit/'.$psm1mark->resultID.'/'.$psm1mark->psmType)}}"><button class="btn btn-outline-primary">Update</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="tab-pane fade" id="psm2" role="tabpanel" aria-labelledby="psm2-tab">
      <div class="row">
        <div class="col-md-11"><h4 style="font-weight:bold;text-align:right";>Deadline</h4></div><br>
        <div class="col-md-11"><h4 style="text-align:right";>{{ $deadlinePsm2->evDeadline }}</h4></div>
      </div><br><br>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Matric No</th>
            <th scope="col">Name</th>
            <th scope="col">Evaluator Marks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($psm2marks as $psm2mark)
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $psm2mark->studentID }}</td>
            <td>{{ $psm2mark->studentName }}</td>
            <td>{{ $psm2mark->evMark }}</td>
            <td><a href="{{ url('evEdit/'.$psm2mark->resultID.'/'.$psm2mark->psmType)}}"><button class="btn btn-outline-primary">Update</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="tab-pane fade" id="pta">
      <div class="row">
      <div class="col-md-11"><h4 style="font-weight:bold;text-align:right";>Deadline</h4></div><br>
        <div class="col-md-11"><h4 style="text-align:right";>{{ $deadlinePta->evDeadline }}</h4></div>
      </div><br><br>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Matric No</th>
            <th scope="col">Name</th>
            <th scope="col">Evaluator Marks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($ptamarks as $ptamark)
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $ptamark->studentID }}</td>
            <td>{{ $ptamark->studentName }}</td>
            <td>{{ $ptamark->evMark }}</td>
            <td><a href="{{ url('evEdit/'.$ptamark->resultID.'/'.$ptamark->psmType)}}"><button class="btn btn-outline-primary">Update</button></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div><br><br>
@endsection