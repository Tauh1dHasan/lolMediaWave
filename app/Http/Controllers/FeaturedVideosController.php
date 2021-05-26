<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use Illuminate\Http\Request;

class FeaturedVideosController extends Controller
{
// construct function to protect from un authentigate user
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
    	$featuredVideos = FeaturedVideo::all();

    	return view('admin.featuredVideos')->with('featuredVideos', $featuredVideos);
    }

// Showing up edit form
    public function edit($id)
    {

    	$datas = FeaturedVideo::find($id);

    	return view('admin.update-featured-video')->with('datas', $datas);

    }

// Updating The data
    public function update(Request $request, $id)
    {
    	// getting current day
    	$currentDay = date("jS F Y");

    	$video = FeaturedVideo::find($id);
// getting full url share link
    	$link = $request->input('link');
// trimming out the code
    	$code = str_replace('https://youtu.be/', '', $link);

    	$video->code = $code;
    	$video->title = $request->input('title');
    	$video->updated = $currentDay;
    	$video->description = $request->input('description');

    	$video->save();

    	return redirect('/featured-videos')->with('success', 'Featured Video updated...');

    }
}
