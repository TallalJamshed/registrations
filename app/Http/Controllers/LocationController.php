<?php

namespace App\Http\Controllers;

use App\Area;
use App\Subarea;
use App\Province;
use App\City;
use App\School;
use App\District;
use Illuminate\Support\Facades\validator;
use Illuminate\Http\Request;
use Session;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showLocationForm()
    {
        $provinces = Province::get();
        return view('locations.addlocation')->with('provinces',$provinces);
    }
    public function showAllLocations(){
        $locations = Subarea::rightjoin('areas','areas.area_id','subareas.fk_area_id')
                                ->rightjoin('cities','cities.city_id','areas.fk_city_id')
                                ->rightjoin('provinces','provinces.province_id','cities.fk_province_id')
                                ->get();
        // $provinces = Province::get();
        // $cities = City::get();
        // $areas = Area::get();
        // $subareas = Subarea::get();
        return view('locations.viewlocation')->with('locations',$locations);
                                                // ->with('provinces',$provinces)
                                                // ->with('cities',$cities)
                                                // ->with('areas',$areas)
                                                // ->with('subareas',$subareas);
    }

    public function addProvinceInDb(Request $request)
    {
        $rules = ['province_name' => 'Required'];
        $messages = ['province_name.required' => 'Province Name is Required'];
        $validator = validator::make($request->all() , $rules , $messages)->validate();

        $province = new Province;
        $province->fill($request->all());
        $province->save();
        Session::flash('message','Province is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function addCityInDb(Request $request)
    {
        $rules = [
            'fk_province_id' => 'Required|exists:provinces,province_id',
            'city_name' => 'Required' ,
        ];
        $messages = [
            'fk_province_id.required' => 'Province Name is Required',
            'fk_province_id.exists' => 'Province Id does not exists in database',
            'city_name.required' => 'City Name is Required' ,
        ];
        $validator = validator::make($request->all() , $rules , $messages)->validate();

        $city = new City;
        $city->fill($request->all());
        $city->save();
        Session::flash('message','City is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function addAreaInDb(Request $request)
    {
        $rules = [
            'fk_province_id' => 'Required|exists:provinces,province_id',
            'fk_city_id' => 'Required|exists:cities,city_id',
            'area_name' => 'Required',
        ];
        $messages = [
            'fk_province_id.required' => 'Province Name is Required',
            'fk_province_id.exists' => 'Province Id does not exists in database',
            'fk_city_id.required' => 'City Name is Required',
            'fk_city_id.exists' => 'City Id does not exists in database',
            'area_name.required' => 'Area Name is Required',
        ];
        $validator = validator::make($request->all() , $rules , $messages)->validate();

        $area = new Area;
        $area->fill($request->all());
        $area->save();
        Session::flash('message','Area is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function addSubAreaInDb(Request $request)
    {
        $rules = ['subarea_name' => 'Required'];
        $messages = ['subarea_name.required' => 'Sub-Area Name is Required'];
        $validator = validator::make($request->all() , $rules , $messages)->validate();

        $subarea = new Subarea;
        $subarea->fill($request->all());
        $subarea->save();
        Session::flash('message','Sub-Area is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }
    
    public function getDistrictsByProvince(Request $request)
    {
        $districts = District::select('district_id','district_name')->where('fk_province_id',$request->fk_province_id)->get();
        return $districts;
    }

    public function getCitiesByDistricts(Request $request)
    {
        $cities = City::select('city_id','city_name')->where('fk_district_id',$request->fk_district_id)->get();
        return $cities;
    }

    public function getAreasByCity(Request $request)
    {
        $areas = Area::select('area_id','area_name')->where('fk_city_id',$request->fk_city_id)->get();
        return $areas;
    }

    public function getSubAreasByArea(Request $request)
    {
        $subareas = Subarea::select('subarea_id','subarea_name')->where('fk_area_id',$request->fk_area_id)->get();
        return $subareas;
    }

    public function showGeoLocatorPage(){
        $provinces = province::get();
        $districts = district::get();
        $cities = city::get();
        $areas = area::get();
        $subareas = subarea::get();
        $schools = school::get();

        return view('geolocator.viewgeolocator')->with('provinces',$provinces)
                                                ->with('districts',$districts)
                                                ->with('cities',$cities)
                                                ->with('areas',$areas)
                                                ->with('subareas',$subareas)
                                                ->with('schools',$schools);
    }

    // public function getSchoolLoc(Request $request){
    //     $locations  = schoolbranch::select('sc_br_status','latitude','longitude','subarea_name','school_name','sc_br_address','area_name','sc_br_id','')
    //                                 ->join('subareas','subareas.subarea_id','schoolbranches.fk_subarea_id')
    //                                 ->join('areas','areas.area_id','schoolbranches.fk_area_id')
    //                                 ->get();
    //     return $locations;
    // }

    public function getMapLocation(Request $request){
        $province = ""; $district=""; $city = ""; $area = ""; $subarea = ""; $school = "";
        
        if(!empty($request->province)){
            $province = province::select('province_name')->where('province_id',$request->province)->first();
            $schools  = school::select('school_name','provinces.province_name','cities.city_name','sc_br_name','sc_br_address','latitude','longitude')
                                ->join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                                ->join('provinces','provinces.province_id','schoolbranches.fk_province_id')
                                ->join('districts','districts.district_id','schoolbranches.fk_city_id')
                                ->join('cities','cities.city_id','schoolbranches.fk_city_id')
                                // ->join('areas','areas.area_id','schoolbranches.fk_area_id')
                                // ->join('subareas','subareas.subarea_id','schoolbranches.fk_subarea_id')
                                ->where('schoolbranches.fk_province_id',$request->province)->get();
        }
        if(!empty($request->district)){
            $district = district::select('district_name')->where('district_id',$request->district)->first();
            $schools  = school::select('school_name','provinces.province_name','cities.city_name','sc_br_name','latitude','longitude')
                                ->join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                                ->join('provinces','provinces.province_id','schoolbranches.fk_province_id')
                                ->join('districts','districts.district_id','schoolbranches.fk_district_id')
                                ->join('cities','cities.city_id','schoolbranches.fk_city_id')
                                // ->leftjoin('areas','areas.area_id','subareas.fk_area_id')
                                // ->leftjoin('subareas','subareas.subarea_id','schoolbranches.fk_subarea_id')
                                ->where('schoolbranches.fk_district_id',$request->district)->get();
        }
        if(!empty($request->city)){
            $city = city::select('city_name')->where('city_id',$request->city)->first();
            $schools  = school::select('school_name','provinces.province_name','cities.city_name','sc_br_name','latitude','longitude')
                                ->join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                                ->join('provinces','provinces.province_id','schoolbranches.fk_province_id')
                                ->join('districts','districts.district_id','schoolbranches.fk_district_id')
                                ->join('cities','cities.city_id','schoolbranches.fk_city_id')
                                // ->join('areas','areas.area_id','subareas.fk_area_id')
                                // ->join('cities','cities.city_id','areas.fk_city_id')
                                // ->join('provinces','provinces.province_id','cities.fk_province_id')
                                ->where('fk_city_id',$request->city)->get();
        }
        if(!empty($request->area)){
            $area = area::select('area_name')->where('area_id',$request->area)->first();
            $schools  = school::select('school_name','provinces.province_name','cities.city_name','sc_br_name','latitude','longitude')
                                ->join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                                ->join('provinces','provinces.province_id','schoolbranches.fk_province_id')
                                ->join('districts','districts.district_id','schoolbranches.fk_district_id')
                                ->join('cities','cities.city_id','schoolbranches.fk_city_id')
                                // ->join('subareas','subareas.subarea_id','schoolbranches.fk_subarea_id')
                                // ->join('areas','areas.area_id','subareas.fk_area_id')
                                // ->join('cities','cities.city_id','areas.fk_city_id')
                                // ->join('provinces','provinces.province_id','cities.fk_province_id')
                                ->where('fk_area_id',$request->area)->get();
        }
        if(!empty($request->subarea)){
            $subarea = subarea::select('subarea_name')->where('subarea_id',$request->subarea)->first();
            $schools  = school::select('school_name','provinces.province_name','cities.city_name','sc_br_name','latitude','longitude')
                                ->join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                                ->join('provinces','provinces.province_id','schoolbranches.fk_province_id')
                                ->join('districts','districts.district_id','schoolbranches.fk_district_id')
                                ->join('cities','cities.city_id','schoolbranches.fk_city_id')
                                // ->join('subareas','subareas.subarea_id','schoolbranches.fk_subarea_id')
                                // ->join('areas','areas.area_id','subareas.fk_area_id')
                                // ->join('cities','cities.city_id','areas.fk_city_id')
                                // ->join('provinces','provinces.province_id','cities.fk_province_id')
                                ->where('fk_subarea_id',$request->subarea)->get();
        }
        if(!empty($request->school)){
            $school = school::select('school_name')->where('school_id',$request->school)->first();
            $schools  = school::select('school_name','provinces.province_name','cities.city_name','sc_br_name','latitude','longitude')
                                ->join('schoolbranches','schools.school_id','schoolbranches.fk_school_id')
                                ->join('provinces','provinces.province_id','schoolbranches.fk_province_id')
                                ->join('districts','districts.district_id','schoolbranches.fk_district_id')
                                ->join('cities','cities.city_id','schoolbranches.fk_city_id')
                                // ->join('subareas','subareas.subarea_id','schoolbranches.fk_subarea_id')
                                // ->join('areas','areas.area_id','subareas.fk_area_id')
                                // ->join('cities','cities.city_id','areas.fk_city_id')
                                // ->join('provinces','provinces.province_id','cities.fk_province_id')
                                ->where('fk_school_id',$request->school)->get();
        }
        $data = array([
            'province' => $province,
            'district' => $district,
            'city' => $city,
            'area' => $area,
            'subarea' => $subarea,
            'school' => $school,
            'schools' => $schools
        ]);
        return $data;
    }
}
