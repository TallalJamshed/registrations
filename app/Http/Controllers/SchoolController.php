<?php

namespace App\Http\Controllers;

use App\School;
use App\Schoolbranch;
use App\Province;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\validator;


class SchoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getSchools(Request $request){
        $schools = schoolbranch::select('latitude','longitude','school_name')
                                    ->join('schools','schools.school_id','schoolbranches.fk_school_id')
                                    ->get();
        return $schools;
    }

    public function getSchoolsBySubarea(Request $request){
        // print_r($request->fk_subarea_id);
        $schools = schoolbranch::select('school_id','school_name')
                                    ->join('schools','schools.school_id','schoolbranches.fk_school_id')
                                    ->where('fk_subarea_id',$request->fk_subarea_id)
                                    ->get();
        // $schools = school::where('fk_subarea_id',$request->fk_subarea_id)->get();
        return $schools;
    }

    public function showAllSchools()
    {
        $schools = school::join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                            ->join('subareas','schoolbranches.fk_subarea_id','subareas.subarea_id')
                            ->join('areas','subareas.fk_area_id','areas.area_id')
                            ->join('institutestatus','institutestatus.status_id','schoolbranches.sc_br_status')
                            ->join('cities','areas.fk_city_id','cities.city_id')
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
        $rules = ['school_name' => 'Required'];
        $messages = ['school_name.required' => 'School Name is Required'];
        $validator = validator::make($request->all() , $rules , $messages)->validate();

        $school = new school;
        $school->fill($request->all());     
        $school->save();                                                                                                       
        Session::flash('message','School is added');
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
