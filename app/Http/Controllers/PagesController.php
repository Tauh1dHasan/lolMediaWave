<?php

namespace App\Http\Controllers;

use App\Models\FeaturedVideo;
use App\Models\AllVideo;
use App\Models\Social;
use App\Models\Contract;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{

// Display Home page 
    public function index() 
    {
    	// Getting Current Day
    	$CurrentDay = date("l");

        $featuredVideo = FeaturedVideo::where('day', $CurrentDay)->get();

        $allVideos = AllVideo::where('day', $CurrentDay)->get();

    	return view('pages.home')->with('featuredVideo', $featuredVideo)->with('allVideos', $allVideos);
    }


// Display about us page
    public function about()
    {
    	return view('pages.about');
    }

// Display contact us page
    public function contact()
    {
    	return view('pages.contact');
    }


// Send mail controller
    public function sendMail(Request $request)
    {
        $contact = new Contract;

        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('pages.contactMail',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('phone'),
                 'msg' => $request->get('message'),
             ), function($msg) use ($request)
               {
                  $msg->from($request->email);
                  $msg->to('website@lolmediawave.com');
               });

        return back()->with('success', 'Thank you for your valueable message');

    }



// Display single video
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
