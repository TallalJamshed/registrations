<?php

namespace App\Http\Controllers;

use App\Schoolbranch;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolBranchUpdateRequest;
use App\Http\Requests\SchoolBranchRequest;
use Illuminate\Support\Facades\validator;
use Session;
use Crypt;


class SchoolbranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addSchoolBranchInDb(SchoolBranchRequest $request)
    {
        // dd($request->all());
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

    public function updateSchoolBranchInDb(SchoolBranchUpdateRequest $request)
    {
        // dd($request);
        $sc_branch = Schoolbranch::where('sc_br_id',$request->sc_br_id)
                                    ->update([
                                        'sc_br_name'=>$request->sc_br_name,
                                        'sc_br_address'=>$request->sc_br_address,
                                        'no_of_boys'=>$request->no_of_boys,
                                        'no_of_girls'=>$request->no_of_girls,
                                        'sc_br_covered_area'=>$request->sc_br_covered_area,
                                        'no_of_teachers'=>$request->no_of_teachers,
                                        'owner_name'=>$request->owner_name,
                                        'owner_phone'=>$request->owner_phone,
                                        'owner_email'=>$request->owner_email,
                                        'principal_name'=>$request->principal_name,
                                        'principal_phone'=>$request->principal_phone,
                                        'principal_email'=>$request->principal_email,
                                        'latitude'=>$request->latitude,
                                        'longitude'=>$request->longitude,
                                        'location_string'=>$request->location_string,
                                    ]);
        if($request->sc_br_status){
            Schoolbranch::where('sc_br_id',$request->sc_br_id)->update(['sc_br_status'=>$request->sc_br_status]);
        }
        if($request->fk_subarea_id){
            Schoolbranch::where('sc_br_id',$request->sc_br_id)->update(['fk_subarea_id'=>$request->fk_subarea_id]);
        }
        Session::flash('message','School Branch is updated');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
        // $sc_branch->owner_email = $request->owner_email;
        // $sc_branch->principal_email = $request->principal_email;

        // $sc_branch->save();
        // dd($sc_branch);
    }

    public function deleteSchoolBranchInDb(Request $request)
    {
        schoolbranch::destroy(Crypt::decrypt($request->delete));
        // dd($request->delete);
        Session::flash('message','School Branch is deleted');
        Session::flash('alert-class', 'alert-warning'); 
        return redirect()->back();
    }
}
