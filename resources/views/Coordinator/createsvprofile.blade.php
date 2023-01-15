@extends ('coordinator')
@section('content')

<!DOCTYPE html>
    <html>
        <style>

table {
border:no border;
text-align:left;
font-size:15px;
height:25px;
}
.round {
  border-radius: 50%;
}

.b{
  width:100px;
  margin-left:20px;
  border-radius:8px;
}


.b1 {
  background-color: white; 
  color: black; 
  border: 2px solid orange;
}

.b1:hover {
  background-color: orange;
  color: white;
}

</style>
<h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href='/searchpsmtitle'>Dashboard</a></li>
          <li class="breadcrumb-item"><a href='/searchsvlist'>Search Supervisor's Profile</a></li>
          <li class="breadcrumb-item"><a href='/createsvprofile'>Create Supervisor's Profile</a></li>
        </ol>

<h3 style="color:orange;font-size:39px;text-align:center;">Create New Supervisor's Profile</h3>
<br><br><br>
    <section class="section profile">

      <div class="row">
      <div class="col-xl-10" style="margin-left: 10%;">
<div class="card">
  <div class="card-body pt-3">

  <form action='createsv' method='post' enctype="multipart/form-data">
                     @csrf
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                      <img src="/uploads/student/default.png"style="width:150px;height:150px; float:left;border-radius:50%;margin-right:25px;border;">
                      <div class="pt-2">
                      <br><br><input type ="file" name="image">
                        </div>
                      </div>
                    </div>

                    <h2 style = "font-size:30px;border:2px;color:orange;">Biography<br><br></h2>
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-12">
                        <textarea type="text" name="biography" class="form-control" id="biography" style="height: 100px" placeholder="Supervisor's biography" required></textarea>
                      </div>
                    </div>

                    <h2 style = "font-size:30px;border:2px;color:orange;">Info<br><br></h2>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">SupervisorID</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text"  name = "id" class="form-control"  placeholder ="Supervisor's ID">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" name="name" class="form-control" placeholder="Supervisor's name" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Phone number</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name="phonenum" class="form-control"  placeholder="Supervisor's Phone number" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name="email" class="form-control" placeholder="Supervisor's email" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Expertise</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name = "expertise" class="form-control" placeholder="Supervisor's expertise" required><br><br>

                    </div>

                    <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Create Profile" style="width:150px;height: 40px;margin-left:50%;"></a>
                      <button onclick="location.href='{{ url('/searchsvlist') }}'" type="submit" class="btn btn-primary" value="Back">BACK</button></a>
                    </div>
                  </div>

</div>
</div>
</div>
</section>
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
</form>
</html>




@endsection
