<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use App\Models\AllVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$FVideos = FeaturedVideo::all();
    	$allVideos = AllVideo::orderBy('id', 'desc')->get();

    	return view('admin.dashboard')->with('fvideos', $FVideos)->with('allVideos', $allVideos);
    }
}
