@extends ('student')
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

.bio{
    margin-left:90%;
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
          <li class="breadcrumb-item"><a href='/myprofile'>Dashboard</a></li>
          <li class="breadcrumb-item"><a href='/searchsupervisor'>Search Supervisor's Profile</a></li>
          <li class="breadcrumb-item"><a href='/svprofile'>View Supervisor's Profile</a></li>
        </ol>

<h3 style="color:orange;font-size:39px;text-align:center;margin-bottom:3%;">Supervisor's Profile</h3>
@foreach($result as $detaa)
<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{$detaa->image}}" alt="Profile" class="rounded-circle">
              <h2>{{$detaa->svname}}</h2>
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

              </ul>

              <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Biography</h5>
                  <p class="small fst-italic">{{$detaa->svbiography}}</p>

                  
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">ID</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->supervisorID}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->svname}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone Number:</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->svphonenum}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->svemail}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Expertise</div>
                    <div class="col-lg-9 col-md-8">{{$detaa->svexpertise}}</div>
                  </div>
                </div>
                </div>
                </div><!-- End Bordered Tabs -->
@endforeach
            </div>
          </div>

        </div>
      </div>
    </section>


<br><br>
<button onclick="location.href='{{ url('/searchsupervisor') }}'"  class="btn btn-primary" value="Back" style="margin-left:80%;">BACK</button>
</html>



@endsection
