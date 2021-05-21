<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$FVideos = FeaturedVideo::all();

    	return view('admin.dashboard')->with('fvideos', $FVideos);
    }
}
