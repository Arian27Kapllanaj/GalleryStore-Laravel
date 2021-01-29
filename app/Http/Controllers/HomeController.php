<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function welcome() {
        return view('welcome')->with(Auth::logout());
    }

    public function index()
    {
        return view('home');
    }

    public function homepage() 
    {
        return view('index');
    }

    public function photoPage() {
        return view('photo');
    }

    public function videoPage() {
        return view('video');
    }
}
