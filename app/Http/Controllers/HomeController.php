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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocupations = \App\Ocupation::all()->sortBy('ocupation');
        return view('home', compact('ocupations'));
    }

    public function addOcupation(Request $data)
    {
        // dd($data->all()['ocupation_id']);
        \Auth::user()->ocupation()->attach($data->all()['ocupation_id']);
        return redirect()->back();
    }
}
