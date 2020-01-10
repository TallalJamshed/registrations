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
                          <h3 class="mb-0">Search Map</h3>
                      </div>
                      <div class="col-4 text-right">
                          <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                      </div>
                  </div>
              </div>
              <div class="card-body">
                <div class="row mt-4">
                  <div class="col-md-1"></div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:600;" class="" for="pov_for_subarea">Select Province</label>
                    </div>
                    <div>
                        <select class="form-control form-control-alternative pov_for_subarea" id="pov_for_subarea" name="pov_for_subarea">
                            <option value=""></option>
                            @foreach ($provinces as $province)
                                <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                      <div>
                          <label style="font-weight:600;" class="" for="city_for_subarea">Select City</label>
                      </div>
                      <div>
                        <select disabled class="form-control form-control-alternative city_for_subarea" id="city_for_subarea" name="city_for_subarea">
                          <option value=""></option>
                          {{-- @foreach ($schools as $school)
                              <option value="{{$school->school_id}}">{{$school->school_name}}</option>
                          @endforeach --}}
                      </select>
                      </div>
                  </div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:bold" class="" for="areaselect">Select Area</label>
                    </div>
                    <div>
                      <select disabled class="form-control form-control-alternative areaselect" id="areaselect" name="areaselect">
                        <option value=""></option>
                        {{-- @foreach ($schools as $school)
                            <option value="{{$school->school_id}}">{{$school->school_name}}</option>
                        @endforeach --}}
                    </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:bold" class="" for="fk_subarea_id">Select Sub-Area</label>
                    </div>
                    <div>
                      <select disabled class="form-control form-control-alternative fk_subarea_id" id="fk_subarea_id" name="fk_subarea_id">
                        <option value=""></option>
                        {{-- @foreach ($schools as $school)
                            <option value="{{$school->school_id}}">{{$school->school_name}}</option>
                        @endforeach --}}
                    </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>
                        <label style="font-weight:bold" class="" for="school_id">Select School</label>
                    </div>
                    <div>
                      <select disabled class="form-control form-control-alternative school_id" id="school_id" name="school_id">
                        <option value=""></option>
                        {{-- @foreach ($schools as $school)
                            <option value="{{$school->school_id}}">{{$school->school_name}}</option>
                        @endforeach --}}
                    </select>
                    <div class="col-md-1"></div>
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