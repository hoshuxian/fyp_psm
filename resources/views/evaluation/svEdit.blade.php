@extends('supervisor')


@section('form')

<div class="container">
  <h2>Update Marks</h2><br>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Marks</h5>

      <!-- Horizontal Form -->
      <form class="form-horizontal" action="{{ url('updateSvMarks/'.$result->resultID.'/'.$result->psmType) }}" id="selectform" method="POST">
      @csrf
        <div class="row mb-3">
          <label class="control-label col-sm-2" for="studentName">Name</label>
          <div class="col-sm-10">
            <h5>{{ $result->studentName }}</h5>
          </div>
        </div>

        <div class="row mb-3">
          <label class="control-label col-sm-2" for="studentID">Matric No.</label>
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

        @if($result->psmType != 'pta') 
          <div class="row mb-3">
          <label class="control-label col-sm-2" for="svMark1">First Evaluation Marks</label>
          <div class="col-sm-10">          
            <input type="number" step="0.01" class="form-control" id="svMark1" value="{{ $result->svMark1 }}" name="svMark1">
          </div>
        </div>
        <div class="row mb-3">
          <label class="control-label col-sm-2" for="svMark2">Second Evaluation Marks</label>
          <div class="col-sm-10">          
            <input type="number" step="0.01" class="form-control" id="svMark2" value="{{ $result->svMark2 }}" name="svMark2">
          </div>
        </div>
        @else
          <div class="row mb-3">
          <label class="control-label col-sm-2" for="svMark">Evaluation Marks</label>
          <div class="col-sm-10">          
            <input type="number" step="0.01" class="form-control" id="svMark" value="{{ $result->svMark }}" name="svMark">
          </div>
        </div>
        @endif

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button class="btn btn-secondary" type="button" onclick="checkreset()">
              Reset
          </button>
        </div> 
      </form><!-- End Horizontal Form -->

    </div>
  </div>
</div>

<script>
  function checkreset(){
    if(confirm('Are you sure to Reset?')){
      document.getElementById('selectform').reset(); 
      document.getElementById('svMark1').value = 0; 
      document.getElementById('svMark2').value = 0;
      document.getElementById('svMark').value = 0;
      return false;
    }
    return false;
  }
</script>

@endsection