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

.card2{
  align-items: center;
  padding: 2px;
  background-color: white; 
}

.label{
  float:right;
}
</style>

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

<h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href='/searchpsmtitle'>Dashboard</a></li>
          <li class="breadcrumb-item"><a href='/searchstudent'>Search Student's Profile</a></li>
          <li class="breadcrumb-item"><a href='/viewstudent'>View Student's Profile</a></li>
        </ol>

<h3 style="color:orange;font-size:39px;text-align:center;margin-bottom:3%;">Student's Profile</h3>
@foreach($result as $detaa)
<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{$detaa->image}}" alt="Profile" class="rounded-circle">
              <h2>{{$detaa->studentName}}</h2>
              <div class="social-links mt-2">
                <a href="http://www.twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->studentName}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Matric ID</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->studentID}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->stdaddress}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone Number:</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->studentPhone}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->stdemail}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Year</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->stdyear}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Supervisor</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->stdsupervisor}}</div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">PSM Title</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->stdpsmtitle}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">PSM Type</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->psmType}}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="/updatestudent/{{$detaa->id}}" method='post' enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ $detaa->image }}" alt="Profile">
                        <div class="pt-2">
                        <input type ="file" name="image" id="name" required>
                        </div>
                      </div>
                    </div>

                    <input name="id" type="text" class="form-control" id="id" value="{{ $detaa->id }}" hidden>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="name" value="{{ $detaa->studentName }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Matric ID</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="matric" type="text" class="form-control" id="matric" value="{{$detaa->studentID}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="address" value="{{$detaa->stdaddress}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phonenum" type="text" class="form-control" id="phonenum" value="{{$detaa->studentPhone}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="{{$detaa->stdemail}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Year</label>
                      <div class="col-md-8 col-lg-9">
                      <select name = "year" value="{{$detaa->stdyear}}" class="form-control" id ="year"required>
                        <option value ="3">3</option>
                        <option value = "4"> 4</option><br><br>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Supervisor</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="stdsupervisor" type="text" class="form-control" id="stdsupervisor" value="{{$detaa->stdsupervisor}}"required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">PSM Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="stdpsmtitle" type="text" class="form-control" id="stdpsmtitle" value="{{$detaa->stdpsmtitle}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">PSM Type</label>
                      <div class="col-md-8 col-lg-9">
                      <select name="psmType" type="text" class="form-control" id="psmType" value="{{$detaa->psmType}}" required>
                      <option value ="PSM1">PSM 1</option>
                      <option value = "PSM2"> PSM 2</option>
                      <option value = "PTA"> PTA</option>
                      </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Industry Assign</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="status" type="text" class="form-control" id="status" value="{{$detaa->industry_status}}" required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                </div><!-- End Bordered Tabs -->
@endforeach
            </div>
          </div>

        </div>
      </div>
    </section>


<br><br>
<button onclick="location.href='{{ url('/searchstudent') }}'"  class="btn btn-primary" value="Back" style="margin-left:80%;">BACK</button>
</html>




@endsection
