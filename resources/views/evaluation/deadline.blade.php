@extends('coordinator')


@section('form')

@if(\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ \Session::get('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


@endif

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Set Deadline</h5>

    <!-- Horizontal Form -->
    <form class="form-horizontal" action="" method="POST">
        @csrf
        <div class="row mb-3">
          <label for="inputPSMType" class="col-sm-2 col-form-label">PSM Type</label>
          <div class="col-sm-10">
            <select name="psmType" id="psmType" class="form-select">
              <option selected value="PSM 1">PSM 1</option>
              <option value="PSM 2">PSM 2</option>
              <option value="PTA">PTA</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="svDeadline" class="col-sm-2 col-form-label">Supervisor Deadline</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="svDeadline" placeholder="Select date..." name="svDeadline">
          </div>
        </div>

        <div class="row mb-3">
          <label for="evDeadline" class="col-sm-2 col-form-label">Evaluator Deadline</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="evDeadline" placeholder="Select date..." name="evDeadline">
          </div>
        </div>

        <br>

        <div class="row mb-3">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    </form>

  </div>
</div>

@endsection