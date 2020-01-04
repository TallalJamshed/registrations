<?php

namespace App\Http\Controllers;

use App\Schoolbranch;
use Illuminate\Http\Request;

class SchoolbranchController extends Controller
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
     * @param  \App\Schoolbranch  $schoolbranch
     * @return \Illuminate\Http\Response
     */
    public function show(Schoolbranch $schoolbranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schoolbranch  $schoolbranch
     * @return \Illuminate\Http\Response
     */
    public function edit(Schoolbranch $schoolbranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schoolbranch  $schoolbranch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schoolbranch $schoolbranch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schoolbranch  $schoolbranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schoolbranch $schoolbranch)
    {
        //
    }
}
