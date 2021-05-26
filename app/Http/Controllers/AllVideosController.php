<?php

namespace App\Http\Controllers;

use App\Models\AllVideo;
use Illuminate\Http\Request;

class AllVideosController extends Controller
{

// construct function to protect from un authentigate user
    public function __construct()
    {
        $this->middleware(['auth']);
    }

// This function will show all the stored videos
    public function index()
    {
    	$allVideos = AllVideo::orderBy('id', 'desc')->get();

    	return view('admin.allVideos')->with('allVideos' , $allVideos);
    }


// Specific Videos by specific day
    public function selectDay($day)
    {
        $videos = AllVideo::where('day', $day)->orderBy('id', 'desc')->get();

    	return view('admin.dayVideos')->with('day', $day)->with('videos', $videos);
    }



// Showitn form to add new video
    public function addForm()
    {
    	return view('admin.add-video');
    }


// Inserting new video into database
    public function addVideo(Request $request)
    {
    // current day
    	$currentDay = date("jS F Y");

    // getting full url share link
    	$link = $request->input('link');
    // trimming out the code
    	$code = str_replace('https://youtu.be/', '', $link);

    	$addVideo = new AllVideo;

    	$addVideo->code = $code;
    	$addVideo->title = $request->input('title');
    	$addVideo->day = $request->input('day');
    	$addVideo->updated = $currentDay;
    	$addVideo->description = $request->input('description');

    	$addVideo->save();

    	return redirect('/all-videos')->with('success', 'New Video Saved...');
    }




// Showing edit video form
    public function editForm($id)
    {
    	$video = AllVideo::find($id);

    	return view('admin.edit-video')->with('video', $video);
    }




// Updating Database value
    public function update(Request $request, $id)
    {
    	$currentDay = date("jS F Y");

    // getting full url share link
    	$link = $request->input('link');
    // trimming out the code
    	$code = str_replace('https://youtu.be/', '', $link);

    	$video = AllVideo::find($id);

    	$video->code = $code;
    	$video->title = $request->input('title');
    	$video->day = $request->input('day');
    	$video->updated = $currentDay;
    	$video->description = $request->input('description');

    	$video->save();

    	return redirect('/all-videos')->with('success', 'Video Updated...');
    }



// Deleting specific video
    public function delete($id)
    {
    	$video = AllVideo::find($id);

    	$video->delete();

    	return redirect('/all-videos')->with('success', 'Vide Deleted...');
    }



}
