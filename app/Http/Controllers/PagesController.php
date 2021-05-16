<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
    	// Getting Current Day
    	$CurrentDay = date("l");

    	// Selecting contants by Current Day
    	// switch ($CurrentDay) {
    	// 	case 'Saturday':
    	// 		return 'Saturday- F62B00';
    	// 		break;

    	// 	case 'Sunday':
    	// 		return 'Sunday- 6500BF';
    	// 		break;

    	// 	case 'Monday':
    	// 		return 'Monday- FE8002';
    	// 		break;

    	// 	case 'Tuesday':
    	// 		return 'Tuesday- FFE60F';
    	// 		break;

    	// 	case 'Wednesday':
    	// 		return 'Wednesday- 00B9FF';
    	// 		break;

    	// 	case 'Thursday':
    	// 		return 'Thursday- BD3AFF';
    	// 		break;

    	// 	case 'Friday':
    	// 		return 'Friday- 36FF00';
    	// 		break;
    		
    	// 	default:
    	// 		return "The days are over";
    	// 		break;
    	// }





    	return view('pages.home');
    }
}
