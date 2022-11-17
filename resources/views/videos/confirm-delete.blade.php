@extends('base')

@section('contents')
<h1>Confirm Delete Video</h1>
<hr>

<div class="card w-50">
    <div class="card-header text-light" style="background-color: #282A3A">
      Delete Video
    </div>
    <div class="card-body">
      <h5 class="card-title">Are you sure you want to delete this video:</h5>
        <p class="card-text"><span>Title:<span> {{$video->title}}</p>
        <p class="card-text"><span>Description:<span> {{$video->description}}</p>
        <p class="card-text"><span>Duration:<span> {{$video->duration}}</p>
        <p class="card-text"><span>Ratings:<span> {{$video->rating}}</p>
        {!! Form::open(['url'=>'/videos/' . $video->id,'method'=>'delete', 'style'=>'display: inline-block']) !!}
            <button class="btn btn-danger" type="submit">
                <i class="fa-solid fa-trash"></i> Delete Video
            </button>
        {!! Form::close() !!}

        <a href="{{url('/videos/' )}}" class="btn btn-success">
            <i class="fa-solid fa-ban"></i> Cancel
        </a>
    </div>
</div>

@endsection