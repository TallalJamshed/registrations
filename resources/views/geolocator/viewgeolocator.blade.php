@extends('template.template2')
@section('content')

{{-- Adding School Name --}}
<div class="container-fluid">
  <form method="POST" action="{{route('addschoolindb')}}">
      @csrf
      <div class="col-xl-12 order-xl-1 mt-4 mb-4">
          <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                      <div class="col-8">
                        {{-- <h3 id="#count"></h3> --}}
                          <h3 class="mb-0">Search Map</h3>
                      <input type="text" id="provschool">

                      </div>
                      
                      <div class="col-4 text-right">
                          <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                      </div>
                  </div>
              </div>
              <div class="card-body">
                <div class="row mt-0">
                  {{-- <div class="col-md-1"></div> --}}
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:600;" class="" for="pov_select">Select Province</label>
                    </div>
                    <div>
                        <select class="form-control form-control-alternative prov_select loc_select" id="pov_select" name="pov_select">
                            <option value=""></option>
                            @foreach ($provinces as $province)
                                <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                      <div>
                          <label style="font-weight:600;" class="" for="dist_select">Select District</label>
                      </div>
                      <div>
                        <select  class="form-control form-control-alternative dist_select loc_select" id="dist_select" name="dist_select">
                          <option value=""></option>
                          @foreach ($districts as $district)
                              <option value="{{$district->district_id}}">{{$district->district_name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:600;" class="" for="city_select">Select City</label>
                    </div>
                    <div>
                      <select  class="form-control form-control-alternative city_select loc_select" id="city_select" name="city_select">
                        <option value=""></option>
                        @foreach ($cities as $city)
                            <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:bold" class="" for="area_select">Select Area</label>
                    </div>
                    <div>
                      <select  class="form-control form-control-alternative area_select loc_select" id="area_select" name="area_select">
                        <option value=""></option>
                        @foreach ($areas as $area)
                            <option value="{{$area->area_id}}">{{$area->area_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:bold" class="" for="sub_select">Select Sub-Area</label>
                    </div>
                    <div>
                      <select  class="form-control form-control-alternative sub_select loc_select" id="sub_select" name="sub_select">
                        <option value=""></option>
                        @foreach ($subareas as $subarea)
                            <option value="{{$subarea->subarea_id}}">{{$subarea->subarea_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:bold" class="" for="school_select">Select School</label>
                    </div>
                    <div>
                      <select  class="form-control form-control-alternative school_select loc_select" id="school_select" name="school_select">
                        <option value=""></option>
                        @foreach ($schools as $school)
                            <option value="{{$school->school_id}}">{{$school->school_name}}</option>
                        @endforeach
                      </select>
                    {{-- <div class="col-md-1"></div> --}}
                    </div>
                  </div>

                </div>
              </div>
          </div>
      </div>
  </form>
</div>

{{-- <div class="container-fluid mt-4"> --}}
  <div id="map"></div>
{{-- </div> --}}
@endsection