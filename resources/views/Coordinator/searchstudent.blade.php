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
          <li class="breadcrumb-item"><a href='/searchstudent'>Search Student's Profile</a></li>
        </ol>

<h3 style="color:orange;font-size:39px;text-align:center;">Student's Profile</h3>
  <!-- Recent Sales -->
  <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Matric ID</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                          <th scope="col">Supervisor</th>
                        <th scope="col">PSM Title</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
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
                        <td>{{$detaa->studentName}}</td>
                        <td >{{$detaa->studentID}}</td>
                        <td>{{$detaa->studentPhone}}</td>
                        <td>{{$detaa->stdemail}}</td>
                        <td >{{$detaa->stdsupervisor}}</td>
                        <td >{{$detaa->stdpsmtitle}}</td>
                        <td><a href="/viewstudent/{{ $detaa->id }}"><button type="button" style="background-color: white; border: 1px solid white;" > <i class="bi bi-eye"></i></button></a></td>
                        <td><a href="/searchstudent/{{ $detaa->id}}"><button type="button" style="background-color: white; border: 1px solid white;" onclick="return confirm('Are you sure?This record and it`s details will be permanantly deleted!')"><i class="bi bi-trash"></i></button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            

<br><br>
<a href="/createnewstudent" class=" mt-1">
<input type="submit" class="search search1" name="new" value="Insert New Profile" style="width:200px;margin-left:700px;"></a>
<br><br><br>
</div>
</html>




@endsection
