@extends('coordinator')
@section('content')
<!DOCTYPE html>
<html >
<style>

</style>
<body>

<div class="card" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title"><b>UPDATE RUBRIC</b></h5>
              <form action="/editrubric" method="post">
                @csrf
                @foreach ($data as $shows)
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">No.</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{$shows->rubricID}}" name="rubricID" readonly>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Rubric Type</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios1" value="student" {{ ($shows->rubricType=="student")? "checked" : "" }} name="rubricType" required>
                      <label style="float:left" class="form-check-label" for="gridRadios1">Student
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios1" value="evaluator" {{ ($shows->rubricType=="evaluator")? "checked" : "" }} name="rubricType" >
                      <label style="float:left" class="form-check-label" for="gridRadios1">Evaluator
                      </label>
                    </div>
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">PSM Type</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios2" value="PSM1" {{ ($shows->psmType=="PSM1")? "checked" : "" }} name="psmType" required>
                      <label style="float:left" class="form-check-label" for="gridRadios2">PSM1
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios2" value="PSM2" {{ ($shows->psmType=="PSM2")? "checked" : "" }} name="psmType">
                      <label style="float:left" class="form-check-label" for="gridRadios2">PSM2
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios2" value="PTA" {{ ($shows->psmType=="PTA")? "checked" : "" }} name="psmType">
                      <label style="float:left" class="form-check-label" for="gridRadios2">PTA
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Competency</label>
                  <div class="col-sm-10">
                    <input  class="form-control" value="{{ $shows->competency}}" name="section" required>
                  </div>
                </div>
                <label  class="col-sm-2 col-form-label"><b>Scale</b></label><br>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Excellent</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="excellent" required>{{ $shows->excellentDesc}}</textarea >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Good</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="good" required>{{ $shows->goodDesc}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Moderate</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="moderate" required>{{ $shows->modDesc}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Weak</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="weak" required>{{ $shows->weakDesc}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Very Weak</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="veryweak" required>{{ $shows->veryweakDesc}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Fail</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="fail" required>{{ $shows->failDesc}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Weight</label>
                  <div class="col-sm-10">
                    <input class="form-control" value="{{ $shows->weight}}" name="weight" required>
                  </div>
                </div>
                @endforeach
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary"><b>UPDATE</b></button>
                  </div>
              </form>


            </div>
</div>



</body>
</html>
@endsection