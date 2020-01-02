<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home1');
})->name('home');

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
Route::get('/news/add','NewsEventController@addNewsPage')->name('addnews');


// schools
Route::get('/school/view','SchoolController@showAllSchools')->name('showschool');
Route::get('/school/form','SchoolController@createSchoolsForm')->name('createschoolform');
Route::post('/school/add','SchoolController@addSchoolInDb')->name('addschoolindb');
Route::post('/school/addbranch','SchoolController@addSchoolBranchInDb')->name('addschoolbranchindb');
Route::post('/getschool','SchoolController@getSchools');


// ajax
Route::post('/cities' , 'LocationController@getCitiesByProvince')->name('getcity');
Route::post('/areas' , 'LocationController@getAreasByCity')->name('getarea');
Route::post('/subareas' , 'LocationController@getSubAreasByArea')->name('getsubarea');







Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
