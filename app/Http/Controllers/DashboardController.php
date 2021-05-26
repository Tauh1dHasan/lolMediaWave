<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use App\Models\AllVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
// construct function to protect from un authentigate user
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
    	$FVideos = FeaturedVideo::all();
    	$allVideos = AllVideo::orderBy('id', 'desc')->get();

    	return view('admin.dashboard')->with('fvideos', $FVideos)->with('allVideos', $allVideos);
    }
}
