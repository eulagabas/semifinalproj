@extends('base')

@section('contents')

<h1>LIST OF VIDEOS</h1>
<hr>
<button type="button" class="btn btn-success float-end mb-lg-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fa-solid fa-circle-plus"></i> Add
</button>
 
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-light" style="background-color:#282A3A">
                <h1 class="modal-title fs-5 " id="add">ADD VIDEO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    {!! Form::open(['url'=>'/videos','method'=>'post']) !!}
                        <div class="mb-3">
                            {!! Form::label("title", "Title:")!!}
                            {!! Form::text("title",null, ['class'=>'form-control', 'placeholder="Enter Title"'])!!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("description", "Description:")!!}
                            {!! Form::text("description",null, ['class'=>'form-control', 'placeholder="Enter description"'])!!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("duration", "Duration:")!!}
                            {!! Form::number("duration",null, ['class'=>'form-control', 'placeholder="Enter duration in Hours"'])!!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("rating", "Ratings:")!!}
                            {!! Form::text("rating",null, ['class'=>'form-control', 'placeholder="Enter ratings"' ])!!}
                        </div>    
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"> <i class="fa-regular fa-floppy-disk"></i> Save changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
           <tr class="text-light" style="background-color:#282A3A;">
                <th>Title</th>
                <th>Description</th>
                <th>Duration (in hours)</th>
                <th>Ratings</th>
                <th class="text-center">Action</th>
           </tr>
        </thead>
        <tbody>
            @foreach($video as $vid)
            <tr>
                <td>{{$vid->title}}</td>
                <td>{{$vid->description}}</td>
                <td>{{$vid->duration}}</td>
                <td>{{$vid->rating}}</td>
                <td class="text-center">
                     <div class="dropdown" title="View Video">
                        <a class="btn btn-success dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-eye"></i> 
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{url('/videos/' . $vid->id)}}"><i class="fa-solid fa-file-pen"></i> Edit</a></li>
                          <li><a class="dropdown-item" href="{{url('/videos/confirm-delete/' .$vid->id)}}"><i class="fa-solid fa-trash-can"></i> Delete</a></li>
                        </ul>
                      </div> 
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>

@endsection