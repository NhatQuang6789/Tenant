<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $status = status::all();
        return view('individual', compact("status"));
    }

    public function all ()
    {
        $status = DB::table("status")->get()->toArray();
        return view('all', compact("status"));   
    }
    
}
