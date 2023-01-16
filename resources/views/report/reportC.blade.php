 @extends('coordinator')
@section('table')
<nav class="d-flex justify-content-center">
      <h1 style="color:orange;font-size:35px;">Manage Report</h1></nav>
</nav>
<hr>

<script>
function printElement(print)
{
    window.print();
}
</script>


<div id="print">
<section class="section" style="margin:auto">
      <div class="row">
      <nav class="d-flex justify-content-center">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="text-align:center;">Student Report</h5>

              <!-- General Form Elements -->
              
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Matrix ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly value="{{$data->studentID}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly value="{{$data->studentName}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly value="{{$data->stdpsmtitle}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Total Marks:</label>
        <div class="col-sm-8">

        <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-info table-sm">
                @if(($data->psmType) == 'pta')
                <thead>
                  <tr>
                  <th scope="col">Evaluation 1</th>
                  <th scope="col">Evaluation 2</th>
                  <th scope="col">Total Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>{{$data->svMark}}</td>
                  <td>{{$data->evMark}}</td>
                  <td>{{$data->totalMark}}</td>
                  </tr>
                  @else
                <thead>
                  <tr>
                  <th scope="col">Evaluation 1</th>
                  <th scope="col">Evaluation 2</th>
                  <th scope="col">Evaluation 3</th>
                  <th scope="col">Total Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>{{$data->svMark1}}</td>
                  <td>{{$data->evMark}}</td>
                  <td>{{$data->svMark2}}</td>
                  <td>{{$data->totalMark}}</td>
                  </tr>
                  @endif
                </tbody>
              </table><br>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Grade</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly value="{{$data->grade}}">
                  </div>
                </div>
                  <div class="col-sm-12">
                  
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
    </nav>
    </div>
  </section>
  <a href="" onclick="printElement(print)" class="btn btn-primary" style="margin-left:60%;" type="submit"><i class="bi bi-printer"></i> Print</a>
  <button onclick="location.href='{{ url('/studentListC') }}'"  class="btn btn-primary" value="Back" style="margin-left:2%;">Back</button>
</div>
@endsection