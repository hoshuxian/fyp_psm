@extends('supervisor')


@section('form')

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Evaluate PSM 1 as supervisor before <b>{{ $deadlinePsm1->svDeadline }}</b> and as evaluator before <b>{{ $deadlinePsm1->evDeadline }}</b>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  Evaluate PSM 2 as supervisor before <b>{{ $deadlinePsm2->svDeadline }}</b> and as evaluator before <b>{{ $deadlinePsm2->evDeadline }}</b>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
Evaluate PTA as supervisor before <b>{{ $deadlinePta->svDeadline }}</b> and as evaluator before <b>{{ $deadlinePta->evDeadline }}</b>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<br><br>

<center>
<section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">

            <br><br><br><br>
              <!-- Horizontal Form -->
                <h3><b>Supervisor's Evaluation</b></h3><br>
                <h4><i>Evaluate as Supervisor</i></h4><br>
                <br> <hr ><br><br>
                <a href="svView"><button type="button" class="btn btn-outline-dark">Supervisor Role</button></a>
              <!-- End Horizontal Form -->
              <br><br><br>

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">

            <br><br><br><br>
              <!-- Vertical Form -->
                <h3><b>Evaluator's Evaluation</b></h3><br>
                <h4><i>Evaluate as Evaluator</i></h4><br>
                <br> <hr ><br><br>
                <a href="evView"><button type="button" class="btn btn-outline-dark">Evaluator Role</button></a>
              <!-- Vertical Form -->
              <br><br><br>

            </div>
          </div>

        </div>
      </div>
    </section>
<br>
</center>

@endsection