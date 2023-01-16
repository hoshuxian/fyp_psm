@extends ('supervisor')
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
          <li class="breadcrumb-item"><a href='/svmyprofile'>Dashboard</a></li>
        </ol>

<h3 style="color:orange;font-size:39px;text-align:center;margin-bottom:3%;">Supervisor's Profile</h3>
<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            @if($detaa->image)
                        <img src="{{ $detaa->image }}" alt="Profile" class="rounded-circle">
                        @else
                        <img src="/uploads/default.jpg" alt="Profile" class="rounded-circle">
                        @endif
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

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
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

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="/updateprofile/{{$detaa->sid}}" method='post' enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                      @if($detaa->image)
                        <img src="{{ $detaa->image }}" alt="Profile" class="rounded-circle">
                        @else
                        <img src="/uploads/default.jpg" alt="Profile" class="rounded-circle">
                        @endif
                        <div class="pt-2">
                        <input type ="file" name="image" required>
                        </div>
                      </div>
                    </div>

                    <input name="sid" type="text" class="form-control" id="sid" value="{{ $detaa->sid }}" hidden>

                    <h2 style = "font-size:30px;border:2px;color:orange;">Biography<br><br></h2>
                    <div class="row mb-3">
                      <div class="col-md-8 col-lg-12">
                        <textarea type="text" name="biography" class="form-control" id="biography" style="height: 100px"required>{{$detaa->svbiography}}</textarea>
                      </div>
                    </div>

                    <h2 style = "font-size:30px;border:2px;color:orange;">Info<br></h2>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">ID</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="supervisorid" type="text" class="form-control" id="supervisorid" value="{{$detaa->supervisorID}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="name" value="{{ $detaa->svname }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phonenum" type="text" class="form-control" id="phonenum" value="{{$detaa->svphonenum}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="{{$detaa->svemail}}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Expertise</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="expertise" type="text" class="form-control" id="expertise" value="{{$detaa->svexpertise}}"required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                </div><!-- End Bordered Tabs -->
            </div>
          </div>

        </div>
      </div>
    </section>


<br><br>
</html>



@endsection
