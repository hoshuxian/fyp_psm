@extends ('coordinator')
@section('content')

<!DOCTYPE html>
    <html>
        <style>

table{
border:no border;
text-align:left;
font-size:15px;
margin-left:160px;
margin-right:150px;
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

.vl {
  border-left: 6px solid black;
  height: 600px;
  width:20%
}

</style>
<h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href='/searchpsmtitle'>Dashboard</a></li>
          <li class="breadcrumb-item"><a href='/searchstudent'>Search Student's Profile</a></li>
          <li class="breadcrumb-item"><a href='/createnewstudent'>Create Student's Profile</a></li>
        </ol>

<h3 style="color:#012970;font-size:39px;text-align:center;margin-bottom:-5%;">Create New Student's Profile</h3>
<br><br><br>
<section class="section profile">

      <div class="row">
      <div class="col-xl-10" style="margin-left: 10%;">
<div class="card">
  <div class="card-body pt-3">
                  <form action='create' method='post' enctype="multipart/form-data">
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

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name = "name"  class="form-control" placeholder="Student's Name" required><br><br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Matric ID</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text"  name = "matric" class="form-control"  placeholder ="Student's Matric ID"><br><br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" name="address" class="form-control" placeholder="Student's Address" required><br><br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Phone number</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name="phonenum" class="form-control"  placeholder="Student's Phone Number" required><br><br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name="email" class="form-control" placeholder="Student's Email Address" required><br><br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Year</label>
                      <div class="col-md-8 col-lg-9">
                      <select class="form-control" name = "year" required>
                        <option value ="3">3</option>
                        <option value = "4"> 4</option>
                        </select>
                      </div>
                    </div>
                    <br><br>
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Supervisor</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name = "supervisor" class="form-control" placeholder="Supervisor's Name" required><br><br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">PSM Title</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="text" name = "psmtitle" class="form-control" placeholder="Student's PSM title" required><br><br>
                    </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">PSM Type</label>
                      <div class="col-md-8 col-lg-9">
                      <select class="form-control" name = "psmtype" required>
                      <option value ="PSM1">PSM 1</option>
                      <option value = "PSM2"> PSM 2</option>
                      <option value = "PTA"> PTA</option>
                      </select>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Create</button>
                      <button onclick="location.href='{{ url('/searchstudent') }}'" type="submit" class="btn btn-primary" value="Back">BACK</button></a>
                    </div>
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
                  </div>

</div>
</div>
</div>
</section>

</html>




@endsection
