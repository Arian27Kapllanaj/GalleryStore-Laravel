<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Map;

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

    public function settingsPage() {
        return view('settings');
    }

    public function infoPage() {
        return view('information');
    }

    //Google Map

    public function display_markers() {
        $data['google_maps_api_key'] = env('GOOGLE_MAPS_API_KEY', '');

        return View('maps.display_markers', $data);
    }

    public function get_all_points() {
        $points = Map::select('id', 'name', 'address', 'lat', 'lng')->get();

        return response()->json($points);
    }
}
