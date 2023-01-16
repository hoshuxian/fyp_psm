@extends('coordinator')
@section('content')
<!DOCTYPE html>
<html>
<style>
</style>
<body>


<div class="card" style="width:100%;">
            <div class="card-body" >
              <h5 class="card-title"><b>ADD NEW RUBRIC</b></h5>
              <form action="/addrubric" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">No.</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Rubric ID" name="id" required>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Rubric Type</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios1" value="student" name="rubricType" required>
                      <label style="float:left" class="form-check-label" for="gridRadios1">
                      Student</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios1" value="evaluator" name="rubricType">
                      <label style="float:left" class="form-check-label" for="gridRadios1">
                      Evaluator</label>
                    </div>
                  </div>
                </fieldset>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">PSM Type</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios2" value="PSM1" name="psmType" required>
                      <label style="float:left" class="form-check-label" for="gridRadios2">
                      PSM1</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="gridRadios2" value="PSM2"  name="psmType">
                      <label style="float:left" class="form-check-label" for="gridRadios2">
                      PSM2</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio"  id="gridRadios2" value="PTA"  name="psmType">
                      <label style="float:left" class="form-check-label" for="gridRadios2">
                      PTA</label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Competency</label>
                  <div class="col-sm-10">
                    <input  class="form-control" placeholder="Rubric Section" name="section" required>
                  </div>
                </div><br>
                <label class="col-sm-2 col-form-label"><b>Scale</b></label>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Excellent</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Description" name="excellent" required></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Good</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Description" name="good" required></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Moderate</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Description" name="moderate" required ></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Weak</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Description" name="weak" required ></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Very Weak</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Description" name="veryweak" required></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Fail</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Description" name="fail" required></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Weight</label>
                  <div class="col-sm-10">
                    <input class="form-control" placeholder="Weightage" name="weight" required>
                  </div>
                </div><br><br>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" >ADD</button>
                    <button type="reset" class="btn btn-secondary">RESET</button>
                  </div>
              </form>


            </div>
</div>

</body>
</html>
@endsection