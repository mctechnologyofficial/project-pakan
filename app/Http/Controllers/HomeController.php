<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        if($request->user()->hasRole('Super Admin')){
            return view('home');
        }
        else if($request->user()->country == "Indonesia"){
            return view('landing.indo.home');
        }
        else if($request->user()->country == "Brunei Darussalam"){
            return view('landing.brunei.home');
        }
    }
}
