<?php

namespace App\Http\Controllers;

use App\Area;
use App\Subarea;
use App\Province;
use App\City;
use Illuminate\Http\Request;
use Session;

class LocationController extends Controller
{
    
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
        $province = new Province;
        $province->fill($request->all());
        $province->save();
        Session::flash('message','Province is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function addCityInDb(Request $request)
    {
        $city = new City;
        $city->fill($request->all());
        $city->save();
        Session::flash('message','City is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function addAreaInDb(Request $request)
    {
        $area = new Area;
        $area->fill($request->all());
        $area->save();
        Session::flash('message','Area is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function addSubAreaInDb(Request $request)
    {
        $subarea = new Subarea;
        $subarea->fill($request->all());
        $subarea->save();
        Session::flash('message','Sub-Area is added');
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }

    public function getCitiesByProvince(Request $request)
    {
        $cities = City::select('city_id','city_name')->where('fk_province_id',$request->fk_province_id)->get();
        return $cities;
    }

    public function getAreasByCity(Request $request)
    {
        $areas = Area::select('area_id','area_name')->where('fk_city_id',$request->fk_city_id)->get();
        return $areas;
    }
}
