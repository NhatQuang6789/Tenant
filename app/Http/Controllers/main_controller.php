<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\status;

class main_controller extends Controller
{
    public function login ()
    {
    	return view("login");
    }

    public function post_login (Request $request)
    {
        $users = array (
					"email" => $request->username,
					"password" => $request->password
				);
    	if(Auth::attempt($users)){
    		return redirect()->route("home");
    	}
    	return redirect()->route("_login");
    }

    public function post_status (Request $request)
    {
    	$status = new status;
    	$status->content = $request->status;
    	$status->save();
    	return redirect()->back();
    }
    public function logout (Request $request)
    {
    	Auth::logout();
    	return redirect()->back();
    }
}
