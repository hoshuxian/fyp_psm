@extends('supervisor')
@section('content')

@if(\Session::has('success'))

  <div class="alert alert-success alert-dismissible fade show" role="alert" style="height:fit-content;">{{\Session::get('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
        <hr>
            @endif

  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FYP Carnival Marks</h5>
              
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Matric ID</th>
                    <th scope="col">Supervisor</th>
                    <th scope="col">FYP Title</th>
                    <!--<th scope="col">PSM 1 Mark</th>-->
                    <th scope="col">PSM 2 Mark</th>
                    <th scope="col">Industry</th>
                    <th scope="col">More Action</th>
                  </tr>
                </thead>
                      <tbody>
                          @foreach($result as $data)  
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{$data->studentName}}</td>
                              <td>{{$data->studentID}}</td>
                              <td>{{$data->stdsupervisor}}</td>
                              <td>{{$data->stdpsmtitle}}</td>
                              <!--<td>{{$data->PSM1_MARKS}}</td>-->
                              <td>{{$data->PSM2_MARKS}}</td>
                              <td>{{$data->industry_status}}</td>
                              
                              <td>&nbsp&nbsp&nbsp<a href="{{ url('/main/' . $data->id. '/edit')}}" title="Edit"><button class="btn btn-outline-info" style="border-radius: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Assign</button></a></td>
                            </tr>
                          @endforeach 
                          </tbody>
              </table>

            </div>
          </div>

        </div>

      </div>
      <div class="text-center">
          <a href="{{ url('/main/create')}}" class="btn btn-primary"><i class="fa fa-filter" aria-hidden="true"></i> Generate Top 20</a>&nbsp&nbsp&nbsp
          <button type="button" onclick="window.print()" class="btn btn-success"><i class="fa fa-cloud-download" aria-hidden="true"></i> Print Result</button>
      </div>
      
    </section>            

 
@endsection