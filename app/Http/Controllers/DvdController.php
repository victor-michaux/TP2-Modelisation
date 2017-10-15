<?php

namespace App\Http\Controllers;

use App\Dvd;
use Illuminate\Http\Request;

class DvdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dvds = Dvd::all();

        return view('dvd.index', ['dvds'    =>  $dvds]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dvd  $dvd
     * @return \Illuminate\Http\Response
     */
    public function show(Dvd $dvd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dvd  $dvd
     * @return \Illuminate\Http\Response
     */
    public function edit(Dvd $dvd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dvd  $dvd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dvd $dvd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dvd  $dvd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dvd $dvd)
    {
        //
    }
}
