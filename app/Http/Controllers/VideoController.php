<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $vid = Video::orderBy('title')->get();
        return view ('videos.index',[
            'video' =>$vid
          ]);
    }

    public function view (Video $video){
        return view('videos.show', [
            'video'=>$video
        ]);
    }

    public function store(Request $request){
        Video::create ([
            'title' =>$request->title,
            'description' =>$request->description,
            'duration'=>$request->duration,
            'rating'=>$request->rating
        ]);
        return redirect('/videos');   
    }

    public function update(Video $video, Request $request){
        $video->update($request->all());
        return redirect('videos/'. $video->id);
    }

    public function delete(Video $video){
        return view('videos.confirm-delete',[
            'video'=>$video
        ]);

    }

    public function destroy(Video $video){
        $video->delete();
        return redirect('/videos');
    }
}
