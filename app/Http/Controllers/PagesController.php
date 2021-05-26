<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use App\Models\AllVideo;
use App\Models\Social;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function index() 
    {
    	// Getting Current Day
    	$CurrentDay = date("l");

        $featuredVideo = FeaturedVideo::where('day', $CurrentDay)->get();

        $allVideos = AllVideo::where('day', $CurrentDay)->get();

    	return view('pages.home')->with('featuredVideo', $featuredVideo)->with('allVideos', $allVideos);
    }



    public function about()
    {
    	return view('pages.about');
    }


    public function contact()
    {
    	return view('pages.contact');
    }

    public function play($code)
    {
    	$video = FeaturedVideo::where('code', $code)->first();

        if ($video == null) {
            
            $video = AllVideo::where('code', $code)->first();

        }

        $CurrentDay = date("l");
        $allVideos = AllVideo::where('day', $CurrentDay)->get();

    	return view('pages.play')->with('video', $video)->with('allVideos', $allVideos);
    	
    }

}
