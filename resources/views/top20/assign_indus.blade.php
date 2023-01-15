@extends('supervisor')
@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Assign Industrial</h5>
              
              <table class="table table-hover">
                       
              <tr>
      <div class="card-body col-lg-6" style="margin-left:auto;margin-right:auto;">
    
      <form class="row g-3" action="{{ url('/main/' .$result->id) }}" method="post">
          {!! csrf_field() !!}
            @method("PATCH")
                <div class="col-12">
                  <label class="form-label">Student Name:</label>
                  <input type="text" name="studentName" id="studentName" value="{{$result->studentName}}" class="form-control" disabled><br/>
                </div>

                <div class="col-12">
                  <label class="form-label">Matric ID:</label>
                  <input type="text" name="studentID" id="studentID" value="{{$result->id}}" class="form-control" disabled><br/>
                </div>

                <div class="col-12">
                  <label class="form-label">Supervisor:</label>
                  <input type="text" name="stdsupervisor" id="stdsupervisor" value="{{$result->stdsupervisor}}" class="form-control" disabled><br/>
                </div>

                <div class="col-12">
                  <label class="form-label">PSM Title:</label>
                  <input type="text" name="stdpsmtitle" id="stdpsmtitle" value="{{$result->stdpsmtitle}}" class="form-control" disabled><br/>
                </div>

                <div class="col-12">
                  <label class="form-label">PSM 1 Marks:</label>
                  <input type="text" name="PSM1_MARKS" id="PSM1_MARKS" value="{{$result->PSM1_MARKS}}" class="form-control" disabled><br/>
                </div>
                <div class="col-12">
                  <label class="form-label">PSM 2 Marks:</label>
                  <input type="text" name="PSM2_MARKS" id="PSM2_MARKS"  value="{{$result->PSM2_MARKS}}" class="form-control" disabled><br/>
                </div>

                <div class="col-12">
                  <label class="form-label">Assign Industry:</label>
                  
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="industry_status" id="industry_status" value="Software" checked>
                      <label class="form-check-label">
                      Software
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="industry_status" id="industry_status" value="Hardware">
                      <label class="form-check-label">
                      Hardware
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="industry_status" id="industry_status" value="Graphic">
                      <label class="form-check-label">
                      Graphic
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="industry_status" id="industry_status" value="AI">
                      <label class="form-check-label">
                      Artificial Intelligence
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="industry_status" id="industry_status" value="Cybersecurity">
                      <label class="form-check-label">
                      Cyber Security
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="industry_status" id="industry_status" value="Others">
                      <label class="form-check-label">
                      Others
                      </label>
                    </div>

                  </div>
                </fieldset>
                    <br/>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>&nbsp&nbsp&nbsp&nbsp
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
       
    </div>
    </tr>
              </table>
              </center>
            </div>
          </div>

        </div>

      </div>
      
    </section> 

@endsection

