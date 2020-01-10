<?php

namespace App\Http\Controllers;
use App\User;
use App\School;
// use App\Schoolbranch;
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

    public function getDashboard()
    {
        $schools = school::join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                            ->join('subareas','schoolbranches.fk_subarea_id','subareas.subarea_id')
                            ->join('areas','subareas.fk_area_id','areas.area_id')
                            ->join('institutestatus','institutestatus.status_id','schoolbranches.sc_br_status')
                            ->join('cities','areas.fk_city_id','cities.city_id')
                            ->get();
        $users = user::get();
        return view('home1')->with('schools',$schools)->with('users',$users);
    }
    public function viewuser()
    {
        $users = user::get();
        return view('users.viewusers')->with('users',$users);
    }
    public function adduser()
    {
        return view('users.addusers');
    }
}
