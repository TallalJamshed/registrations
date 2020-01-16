<?php
// FRONT END ROUTES////////////////////////////////

Route::get('/', function () {
    return view('frontend.homepage');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/school', function () {
    return view('frontend.regschool');
})->name('regschool');

Route::get('/ngo', function () {
    return view('frontend.regngo');
})->name('regngo');

// ////////////////////////////////////////////////




// Route::get('/reg-admin', function () {
//     return view('home1');
// })->name('admin')->middleware(['auth']);

ROute::get('/reg-admin','HomeController@getDashboard')->name('admin')->middleware(['auth']);
Auth::routes();
// users
Route::get('/viewusers', 'HomeController@viewuser')->name('viewuser');
Route::get('/addusers', 'HomeController@adduser')->name('adduser');

// locations
Route::get('/location/form','LocationController@showLocationForm')->name('showlocform');

Route::post('/location/addpov','LocationController@addProvinceInDb')->name('addprovince');
Route::post('/location/addcity','LocationController@addCityInDb')->name('addcity');
Route::post('/location/addarea','LocationController@addAreaInDb')->name('addarea');
Route::post('/location/addsubarea','LocationController@addSubAreaInDb')->name('addsubarea');

Route::get('/location/view','LocationController@showAllLocations')->name('showloctables');

// geo locator
Route::get('/geolocator/view','LocationController@showGeoLocatorPage')->name('showgeolocator');

//news - events
Route::get('/news/view','NewsEventController@showNewsPage')->name('shownews');
Route::post('/news/add','NewsEventController@addNewsPage')->name('addnews');


// schools
Route::get('/school/view','SchoolController@showAllSchools')->name('showschool');
Route::get('/school/form','SchoolController@createSchoolsForm')->name('createschoolform');
Route::post('/school/add','SchoolController@addSchoolInDb')->name('addschoolindb');
Route::post('/getschool','SchoolController@getSchools');

// School Branch
Route::post('/school/addbranch','SchoolbranchController@addSchoolBranchInDb')->name('addschoolbranchindb');
Route::post('/school/updatebranch','SchoolbranchController@updateSchoolBranchInDb')->name('updateschoolbranchindb');
Route::post('/school/delete','SchoolbranchController@deleteSchoolBranchInDb')->name('deleteschoolbranchindb');


Route::get('/school/edit/{id}',function($id){
    return view('schools.editschool')
            ->with('school',App\SchoolBranch::join('schools','schools.school_id','schoolbranches.fk_school_id')
                                            ->join('institutestatus','schoolbranches.sc_br_status','institutestatus.status_id')
                                            ->join('subareas','schoolbranches.fk_subarea_id','subareas.subarea_id')
                                            ->join('areas','areas.area_id','subareas.fk_area_id')
                                            ->join('cities','cities.city_id','areas.fk_city_id')
                                            ->join('provinces','provinces.province_id','cities.fk_province_id')
                                            ->find($id))
            ->with('areas' , App\Area::get())
            ->with('status' , App\institutestatus::get());
});

// ajax
Route::post('/cities' , 'LocationController@getCitiesByProvince')->name('getcity');
Route::post('/areas' , 'LocationController@getAreasByCity')->name('getarea');
Route::post('/subareas' , 'LocationController@getSubAreasByArea')->name('getsubarea');
Route::post('/schools' , 'SchoolController@getSchoolsBySubarea')->name('getschoolbysubarea');
Route::post('/getmapdata' , 'LocationController@getMapLocation')->name('getmaplocation');






Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
