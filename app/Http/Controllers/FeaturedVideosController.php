<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use Illuminate\Http\Request;

class FeaturedVideosController extends Controller
{
    public function index()
    {
    	$featuredVideos = FeaturedVideo::all();

    	return view('admin.featuredVideos')->with('featuredVideos', $featuredVideos);
    }
}
