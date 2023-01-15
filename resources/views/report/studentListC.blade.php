@extends('coordinator')
@section('table')
<nav class="d-flex justify-content-center">
      <h1 style="color:orange;font-size:35px;">Manage Report</h1></nav><br>
      <nav class="d-flex justify-content-center" style="--bs-breadcrumb-divider: '|';font-size:18px;">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" style="font-size:18px;">View Report</li>
                  <li class="breadcrumb-item" style="font-size:18px;"><a href="reportOverview">Report Overview</a></li>
                </ol>
              </nav>
<hr>


<nav class="d-flex justify-content-center">
<h1>Student List</h1><br>
</nav>


<ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" href="psm1" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">PSM 1</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" href="psm2" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PSM 2</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" href="pta" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">PTA</button>
                </li>
              </ul>

              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <br>
                  <nav class="d-flex justify-content-center"><h5>Student List for PSM 1</h5></nav>
                  <br>

                  <nav class="d-flex justify-content-center">
            <div class="col-9" >
              <div class="card recent-sales overflow-auto">
                <div class="card-body" >

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">MATRIX ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($results1 as $result)
                      <tr>
                        <td>{{$result->studentID}}</td>
                        <td>{{$result->studentName}}</td>
                        <td><a class="btn btn-primary" href= "{{ url('reportC/'.$result->resultID.'/'.$result->psmType)}}"><i class="bi bi-search"></i> View</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
                </div>
</nav>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <br>
                <nav class="d-flex justify-content-center"><h5>Student List for PSM 2</h5></nav>
                <br>

        <nav class="d-flex justify-content-center">
        <div class="col-9" >
              <div class="card recent-sales overflow-auto">
                <div class="card-body" >

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">MATRIX ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($results2 as $result)
                      <tr>
                        <td>{{$result->studentID}}</td>
                        <td>{{$result->studentName}}</td>
                        <td><a class="btn btn-primary" href= "{{ url('reportC/'.$result->resultID.'/'.$result->psmType)}}"><i class="bi bi-search"></i> View</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <nav class="d-flex justify-content-center"><h5>Student List for PTA</h5></nav>
                <br>

        <nav class="d-flex justify-content-center">
        <div class="col-9" >
              <div class="card recent-sales overflow-auto">
                <div class="card-body" >

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">MATRIX ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($results3 as $result)
                      <tr>
                        <td>{{$result->studentID}}</td>
                        <td>{{$result->studentName}}</td>
                        <td><a class="btn btn-primary" href= "{{ url('reportC/'.$result->resultID.'/'.$result->psmType)}}"><i class="bi bi-search"></i> View</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div></nav>
                </div>
              </div>
</div>
</div>


<br><br>
@endsection