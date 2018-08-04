<?php

namespace App\Http\Controllers;

use App\birthday;
use Illuminate\Http\Request;

class BirthdayController extends Controller
{
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
        //
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
            'bday' => 'required'
        ]);
        Birthday::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\birtday  $birtday
     * @return \Illuminate\Http\Response
     */
    public function show(birtday $birtday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\birtday  $birtday
     * @return \Illuminate\Http\Response
     */
    public function edit(birtday $birtday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\birtday  $birtday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, birtday $birtday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\birtday  $birtday
     * @return \Illuminate\Http\Response
     */
    public function destroy(birtday $birtday)
    {
        //
    }
}
