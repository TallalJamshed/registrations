<?php

namespace App\Http\Controllers;

use App\School;
use App\Schoolbranch;
use App\Province;
use Illuminate\Http\Request;
use Session;

class SchoolController extends Controller
{
    public function getSchools(Request $request){
        $schools = schoolbranch::select('latitude','longitude','school_name')
                                    ->join('schools','schools.school_id','schoolbranches.fk_school_id')
                                    ->get();
        return $schools;
    }

    public function showAllSchools()
    {
        $schools = school::join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                            // ->join('subareas','schoolbranches.fk_subarea_id','subareas.subarea_id')
                            // ->join('subareas','schoolbranches.fk_subarea_id','subareas.subarea_id')
                            ->get();
        return view('schools.viewschools')->with('schools',$schools);
    }

    public function createSchoolsForm()
    {
        $schools = School::get();
        $provinces = Province::get();
        return view('schools.addschools')->with('schools',$schools)->with('provinces',$provinces);
    }

    public function addSchoolInDb(Request $request)
    {
        $school = new school;
        $school->fill($request->all());     
        $school->save();                                                                                                       
        Session::flash('message','School is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function addSchoolBranchInDb(Request $request)
    {
        $sc_branch = new Schoolbranch;
        $sc_branch->fill($request->all());     
        $sc_branch->save();                                                                                                       
        Session::flash('message','School Branch is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();

    }

    public function edit(School $school)
    {
        //
    }

    public function update(Request $request, School $school)
    {
        //
    }

    public function destroy(School $school)
    {
        //
    }
}
