<?php

namespace App\Http\Controllers;

use App\Subarea;
use Illuminate\Http\Request;

class SubareaController extends Controller
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
     * @param  \App\Subarea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function show(Subarea $subarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subarea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Subarea $subarea)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subarea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subarea $subarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subarea  $subarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subarea $subarea)
    {
        //
    }
}
