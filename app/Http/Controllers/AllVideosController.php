<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllVideosController extends Controller
{
    public function index()
    {
    	return view('admin/allVideos');
    }

    public function selectDay($day)
    {
    	return view('admin.dayVideos')->with('day', $day);
    }
}
