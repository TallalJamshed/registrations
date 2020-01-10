<?php

namespace App\Http\Controllers;

use App\Schoolbranch;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolBranchRequest;
use Illuminate\Support\Facades\validator;


class SchoolbranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addSchoolBranchInDb(SchoolBranchRequest $request)
    {
        $sc_branch = new Schoolbranch;
        $sc_branch->fill($request->all());     
        $sc_branch->save();                                                                                                       
        Session::flash('message','School Branch is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Schoolbranch $schoolbranch)
    {
        //
    }

    public function edit(Schoolbranch $schoolbranch)
    {
        //
    }

    public function update(Request $request, Schoolbranch $schoolbranch)
    {
        //
    }

    public function destroy(Schoolbranch $schoolbranch)
    {
        //
    }
}
