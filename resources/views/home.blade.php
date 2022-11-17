@extends('base')
@section('contents')
<div class="card mb-3 mt-5 mx-auto" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="/image/productions.png" class="img-fluid rounded-start" alt="Logo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Videos</h5>
          <p class="card-text">Want to Create exciting and thrilling videos?</p>
          <a href="{{url('/videos/')}}"  class="btn text-light" style="background-color: #282A3A">Click here</a>
        </div>
      </div>
    </div>
  </div>
@endsection
