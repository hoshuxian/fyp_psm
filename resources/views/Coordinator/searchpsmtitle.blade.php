@extends ('coordinator')
@section('content')


<!DOCTYPE html>
    <html>
        <style>

table {
    margin:auto;
    width:95%;
    border-collapse:collapse;
    font-family:Arial;
    padding-bottom:20px;
}

.search{
  width:100px;
  margin-left:20px;
  border-radius:8px;
}

.search1 {
  background-color: white; 
  color: black; 
  border: 2px solid orange;
}

.search1:hover {
  background-color: orange;
  color: white;
}

.search {
    margin-left:35px;
}

.search2 {
    margin-left:30px;
}

</style>
<h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href='/searchpsmtitle'>Dashboard</a></li>
        </ol>
<h3 style="color:orange;font-size:39px;text-align:center;">PSM Title List</h3>
  <!-- Recent Sales -->
  <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">PSM Title</th>
                        <th scope="col">Stuent's Name</th>
                        <th scope="col">Student's ID</th>
                        <th scope="col">Supervisor</th>
                        <th scope="col">Type of PSM</th>
                        </tr>
                    </thead>
                        @if(session()->has('successMsg'))
                          <div class="alert alert-success">
                              {{ session()->get('successMsg') }}
                          </div>
                        @endif
                        @if(session()->has('FailedMsg'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('FailedMsg') }}
    </div>
@endif
                        <tbody>
                        @foreach($deta as $detaa)
                        <tr>
                          <td >{{$detaa->stdpsmtitle}}</td>
                          <td>{{$detaa->studentName}}</td>
                          <td >{{$detaa->studentID}}</td>
                          <td >{{$detaa->stdsupervisor}}</td>
                          <td >{{$detaa->psmType}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

</div>

</html>




@endsection
