<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use App\Models\AllVideo;
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

    public function play()
    {
    	// need to create model $code will be matched from database
    	return view('pages.play');
    	
    }

}
