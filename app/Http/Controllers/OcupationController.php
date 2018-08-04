<?php

namespace App\Http\Controllers;

use App\ocupation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OcupationController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ocupations = Ocupation::all()->sortBy('ocupation');
        return view('admin.addOcupation', compact('ocupations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ocupation' => 'required',
        ]);
        Ocupation::create($request->all());
        return redirect()->back();
    }

    protected function addPerson(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $newUser = \App\User::create([
            'first_name' => $request['first_name'],            
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        $newUser->ocupation()->attach($request['ocupation_id']);
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ocupation  $ocupation
     * @return \Illuminate\Http\Response
     */
    public function show(ocupation $ocupation)
    {
        $members = DB::table('ocupation_user')->where('ocupation_id', $ocupation->id)->get();
        $staff = [];
        foreach($members as $person) {
            $staff[] = \App\User::find($person->user_id);
            
        }
        ksort($staff);
        return view('admin.staff', compact('staff', 'ocupation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ocupation  $ocupation
     * @return \Illuminate\Http\Response
     */
    public function edit(ocupation $ocupation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ocupation  $ocupation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ocupation $ocupation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ocupation  $ocupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ocupation $ocupation)
    {
        //
    }
}
