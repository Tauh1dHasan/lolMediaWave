<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
// construct function to protect from un authentigate user
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
// User setting page show
    public function index()
    {
    	$user = User::orderBy('id', 'desc')->get();
    	$social = Social::orderBy('id', 'desc')->get();

    	return view('admin.accountSetting')->with('users', $user)->with('socials', $social);
    }

// User info update function
    public function update(Request $request)
    {
    	$id = 1;
    	$account = User::find($id);

    	$account->name = $request->input('name');
    	$account->email = $request->input('email');
    	$account->password = Hash::make($request->input('password'));

    	$account->save();

    	return redirect('/account-setting')->with('success', 'Account information updated...');
    }

// Social links update function
    public function socialUpdate(Request $request)
    {
    	$id = 1;

    	$social = Social::find($id);

    	$social->facebook = $request->input('facebook');
    	$social->twitter = $request->input('twitter');
    	$social->instagram = $request->input('instagram');
    	$social->youtube = $request->input('youtube');

    	$social->save();

    	return redirect('/account-setting')->with('success', 'Social Media link updated...');
    }


}
