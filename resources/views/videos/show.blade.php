@extends('base')
@section('contents')
    
<h1>View Video</h1>
<hr>
<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered">
            <tr>
                <th class="text-light" style="background-color:#282A3A">Title</th>
                <td>{{$video->title}}</td>
            </tr>
            <tr>
                <th class="text-light" style="background-color: #282A3A">Description</th>
                <td>{{$video->description}}</td>
            </tr>
            <tr>
                <th class="text-light" style="background-color: #282A3A">Duration</th>
                <td>{{$video->duration}}</td>
            </tr>
            <tr>
                <th class="text-light" style="background-color: #282A3A">Rating</th>
                <td>{{$video->rating}}</td>
            </tr>
        </table>
        <button type="button" class="btn btn-success float-end mb-lg-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-regular fa-pen-to-square"></i> Edit Video
        </button>
        <a href="{{url('/videos')}}" class="btn btn-warning">
            <i class="fa-solid fa-angles-left"></i> Back
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-light" style="background-color:#282A3A">
                        <h1 class="modal-title fs-5 " id="add">Update Video</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
           
                    <div class="modal-body">
                        {!! Form::model($video,['url'=>'/videos/' . $video->id, 'method'=> 'put'] ) !!}
                        <div class="mb-3">
                            {!! Form::label("title", "Title") !!}
                            {!! Form::text("title", null, ['class'=>'form-control', 'placeholder="Enter Title"']) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::label("description", "Description") !!}
                            {!! Form::text("description", null, ['class'=>'form-control', 'placeholder="Enter Description"']) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::label("duration", "Duration") !!}
                            {!! Form::number("duration", null, ['class'=>'form-control', 'placeholder="Enter Duration in hours"']) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::label("rating", "Ratings") !!}
                            {!! Form::text("rating", null, ['class'=>'form-control', 'placeholder="Enter Ratings"']) !!}
                        </div>
                        
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close</button>
                            <button type="submit" class="btn btn-primary"> <i class="fa-regular fa-floppy-disk"></i> Save changes</button>
                        </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection