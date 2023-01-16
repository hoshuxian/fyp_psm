@extends('supervisor')


@section('form')

<div class="container">
  <h2>Update Marks</h2><br>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Marks</h5>

        <form class="form-horizontal" action="{{ url('updateEvMarks/'.$result->resultID.'/'.$result->psmType) }}" id="selectform" method="POST">
          @csrf
          <div class="row mb-3">
            <label class="control-label col-sm-2" for="studentName">Name</label>
            <div class="col-sm-10">
              <h5>{{ $result->studentName }}</h5>
            </div>
          </div>
          <div class="row mb-3">
            <label class="control-label col-sm-2" for="studentID">Metric No.</label>
            <div class="col-sm-10">          
            <h5>{{ $result->studentID }}</h5>
            </div>
          </div>
          <div class="row mb-3">
            <label class="control-label col-sm-2" for="psmType">PSM Type</label>
            <div class="col-sm-10">          
            <h5>{{ $result->psmType }}</h5>
            </div>
          </div>
          <div class="row mb-3">
            <label class="control-label col-sm-2" for="stdpsmtitle">Project Title</label>
            <div class="col-sm-10">          
              <h5>{{ $result->stdpsmtitle }}</h5>
            </div>
          </div>
            <div class="row mb-3">
            <label class="control-label col-sm-2" for="evMark">Evaluation Marks</label>
            <div class="col-sm-10">          
              <input type="number" step="0.01" class="form-control" id="evMark" value="{{ $result->evMark }}" name="evMark">
            </div>
          </div>
          <br>
          <div class="text-center">        
            <button type="submit" class="btn btn-primary">Submit</button>
            <button class="btn btn-secondary" type="button" onclick="checkreset()">
                  Reset
            </button>
          </div>
        </form>
</div>
</div>
<button onclick="location.href='{{ url('/evView') }}'"  class="btn btn-primary" value="Back" style="margin-left:48%;">Back</button>
<br><br>

<script>
  function checkreset(){
    if(confirm('Are you sure to Reset?')){
      document.getElementById('selectform').reset(); 
      document.getElementById('evMark').value = 0; 
      return false;
    }
  }
</script>

@endsection