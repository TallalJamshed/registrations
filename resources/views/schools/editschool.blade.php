@extends('template.template2')
@section('content')

{{-- Adding School Name --}}
{{-- <div class="container-fluid">
    <form method="POST" action="{{route('addschoolindb')}}">
        @csrf
        <div class="col-xl-12 order-xl-1 mt-5">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add School Name</h3>
                        </div>
                        <div class="col-4 text-right">
                            <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div style="text-align:center">
                        <div style="display:inline-block; padding:10px">
                            <label style="font-weight:bold" class="" for="school_name">School Name</label>
                        </div>
                        <div style="display:inline-block; padding:10px; min-width:50%; max-width:80%">
                            <input type="text" id="school_name" name="school_name" class="form-control form-control-alternative"
                            older="School Name">
                        </div>
                        <div class="row">
                            @error('school_name')
                                <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div> --}}
{{-- {{dd($school)}} --}}
{{-- Adding School Branch--}}
<div class="container-fluid mb-5">
    @if($errors->any())
        <span class="ml-auto mr-auto" style="color:red">{{"There is some error"}}</span>
    @endif
    @error('sc_br_id')
        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
    @enderror
    <form method="POST" action="{{route('updateschoolbranchindb')}}">
        @csrf
        <input type="text" name="sc_br_id" hidden value="{{$school->sc_br_id}}">
        <div class="col-xl-12 order-xl-1 mt-5">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit School Details</h3>
                        </div>
                        <div class="col-4 text-right">
                            <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- {{ count($errors)}} --}}
                    <h6 class="heading-small text-muted mb-4">School information</h6>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold; width:100%">School Name</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text"class="form-control form-control-alternative" value="{{$school->school_name}}" disabled readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="sc_br_name">Branch Name</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="sc_br_name" name="sc_br_name" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->sc_br_name}}" placeholder="Branch Name">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('sc_br_name')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="sc_br_address">School Address</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="sc_br_address" name="sc_br_address" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->sc_br_address}}" placeholder="School Address">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('sc_br_address')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="sc_br_status">School status</label>
                            </div>
                            <div class="row col-md-10">
                                <div class="col-md-6 no-pad1">
                                    <input type="text" class="form-control form-control-alternative black-font" value="{{$school->status_name}}" disabled readonly>
                                </div>
                                <div class="col-md-6 no-pad2">
                                    <select class="form-control form-control-alternative sc_br_status" id="sc_br_status" name="sc_br_status">
                                        <option value=""></option>
                                        @foreach ($status as $item)
                                            <option value="{{$item->status_id}}">{{$item->status_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('sc_br_status')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="no_of_boys">No of Boys</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="no_of_boys" name="no_of_boys" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->no_of_boys}}" placeholder="Number of Boys">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('no_of_boys')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="no_of_girls">No of Girls</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="no_of_girls" name="no_of_girls" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->no_of_girls}}" placeholder="Number of girls">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('no_of_girls')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="sc_br_covered_area">Covered Area</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="sc_br_covered_area" name="sc_br_covered_area" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->sc_br_covered_area}}" placeholder="Total Covered Area">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('sc_br_covered_area')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="no_of_teachers">No of Teachers</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="no_of_teachers" name="no_of_teachers" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->no_of_teachers}}" placeholder="Number Of Teachers">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('no_of_teachers')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />

                    <h6 class="heading-small text-muted mb-4">Owner information</h6>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="owner_name">Owner Name</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="owner_name" name="owner_name" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->owner_name}}" placeholder="Owner Name">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('owner_name')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="owner_phone">Owner Phone No</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="owner_phone" name="owner_phone" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->owner_phone}}" placeholder="Owner Number">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('owner_phone')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="owner_email">Owner Email</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="owner_email" name="owner_email" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->owner_email}}" placeholder="Owner Email">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('owner_email')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />

                    <h6 class="heading-small text-muted mb-4">Principal information</h6>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="principal_name">Principal Name</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="principal_name" name="principal_name" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->principal_name}}" placeholder="Principal Name">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('principal_name')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="principal_phone">Principal Phone No</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="principal_phone" name="principal_phone" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->principal_phone}}" placeholder="Principal Number">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('principal_phone')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="principal_email">Principal Email</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" id="principal_email" name="principal_email" class="disable_on_sc_id form-control form-control-alternative" 
                                value="{{$school->principal_email}}" placeholder="Principal Email">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('principal_email')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />
                        
                    <h6 class="heading-small text-muted mb-4">Area information</h6>

                    <div class="row mt-5">
                        <div class="col-md-3">
                            <div class="col-md-10">
                                <label style="font-weight:bold">Province</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control black-font" value="{{$school->province_name}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-10">
                                <label style="font-weight:bold">City</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control black-font" value="{{$school->city_name}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-10">
                                <label style="font-weight:bold">Area</label>
                            </div>
                            <div class="col-md-10">
                                <input  type="text" class="form-control black-font" value="{{$school->area_name}}" disabled>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="col-md-10">
                                <label style="font-weight:bold">Sub Area</label>
                            </div>
                            <div class="col-md-10">
                                <input  type="text" class="form-control black-font" value="{{$school->subarea_name}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="areaselect">Select Area</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control form-control-alternative areaselect" id="areaselect" name="areaselect">
                                    <option value=""></option>
                                    @foreach ($areas as $area)
                                        <option value="{{$area->area_id}}">{{$area->area_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('areaselect')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="fk_subarea_id">Select Sub-Area</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control form-control-alternative fk_subarea_id" id="fk_subarea_id" name="fk_subarea_id">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('fk_subarea_id')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="latitude">Latitude</label>
                            </div>
                            <div class="col-md-10">
                                <input  type="text" id="latitude" name="latitude" class="form-control form-control-alternative" 
                                value="{{$school->latitude}}" placeholder="Latitude">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('latitude')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="longitude">Longitude</label>
                            </div>
                            <div class="col-md-10">
                                <input  type="text" id="longitude" name="longitude" class="form-control form-control-alternative" 
                                value="{{$school->longitude}}" placeholder="Longitude">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('longitude')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-10">
                                <label style="font-weight:bold" class="" for="location_string">Location String</label>
                            </div>
                            <div class="col-md-10">
                                <input  type="text" id="location_string" name="location_string" class="form-control form-control-alternative" 
                                value="{{$school->location_string}}" placeholder="Location String">
                            </div>
                            <div class="row" style="text-align:center">
                                <div class="col-md-10">
                                    @error('location_string')
                                        <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
