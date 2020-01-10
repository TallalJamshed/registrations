@extends('template.template2')
@section('content')

{{-- Adding Province --}}
<div class="container-fluid">
    <form method="POST" action="{{route('addprovince')}}">
        @csrf
        <div class="col-xl-12 order-xl-1 mt-5">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add Province</h3>
                        </div>
                        <div class="col-4 text-right">
                            <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div style="text-align:center">
                        <div style="display:inline-block; padding:10px">
                            <label style="font-weight:bold" class="" for="province_name">Province Name</label>
                        </div>
                        <div style="display:inline-block; padding:10px; min-width:50%; max-width:80%">
                            <input required type="text" id="province_name" name="province_name" 
                                    class="form-control form-control-alternative" placeholder="Province Name">
                        </div>
                        <div class="row">
                            @error('province_name')
                                <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                            @enderror
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

{{-- Adding City --}}
<div class="container-fluid">
    <form  method="POST" action="{{route('addcity')}}">
        @csrf
        <div class="col-xl-12 order-xl-1 mt-5">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add City</h3>
                        </div>
                        <div class="col-4 text-right">
                            <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="row col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="fk_province_id">Select Province</label>
                            </div>
                            <div class="col-md-8">
                                <select  class="form-control form-control-alternative povselect" id="fk_province_id" name="fk_province_id">
                                    <option value=""></option>
                                    @foreach ($provinces as $province)
                                        <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                                    @endforeach
                                  </select>
                                  @error('fk_province_id')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                  @enderror
                            </div>
                            
                                
                        </div>
                        <div class="row col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="city_name">City Name</label>
                            </div>
                            <div class="col-md-8">
                                <input  disabled type="text" id="city_name" name="city_name" class="form-control form-control-alternative" 
                                placeholder="City Name">
                                @error('city_name')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

{{-- Adding Area --}}
<div class="container-fluid">
    <form  method="POST" action="{{route('addarea')}}">
        @csrf
        <div class="col-xl-12 order-xl-1 mt-5">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add Area</h3>
                        </div>
                        <div class="col-4 text-right">
                            <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="row col-md-4">
                            <div class="col-md-5">
                                <label style="font-weight:bold" class="" for="pov_for_area">Select Province</label>
                            </div>
                            <div class="col-md-7">
                                <select required class="form-control form-control-alternative pov_for_area" id="pov_for_area" name="fk_province_id">
                                    <option value=""></option>
                                    @foreach ($provinces as $province)
                                        <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                                    @endforeach
                                </select>
                                @error('fk_province_id')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-md-4">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="fk_city_id">Select City</label>
                            </div>
                            <div class="col-md-8">
                                <select required disabled class="form-control form-control-alternative cityselect" id="fk_city_id" name="fk_city_id">
                                    <option value=""></option>
                                </select>
                                @error('fk_city_id')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-md-4">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="area_name">Area Name</label>
                            </div>
                            <div class="col-md-8">
                                <input  disabled type="text" id="area_name" name="area_name" class="form-control form-control-alternative" 
                                placeholder="Area Name">
                                @error('area_name')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

{{-- Adding Sub-Area --}}
<div class="container-fluid mb-5">
    <form  method="POST" action="{{route('addsubarea')}}">
        @csrf
        <div class="col-xl-12 order-xl-1 mt-5">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add Sub-Area</h3>
                        </div>
                        <div class="col-4 text-right">
                            <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="row col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="pov_for_subarea">Select Province</label>
                            </div>
                            <div class="col-md-8">
                                <select required class="form-control form-control-alternative pov_for_subarea" id="pov_for_subarea" name="fk_province_id">
                                    <option value=""></option>
                                    @foreach ($provinces as $province)
                                        <option value="{{$province->province_id}}">{{$province->province_name}}</option>
                                    @endforeach
                                </select>
                                @error('fk_province_id')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="fk_city_id">Select City</label>
                            </div>
                            <div class="col-md-8">
                                <select required disabled class="form-control form-control-alternative city_for_subarea" id="city_for_subarea" name="fk_city_id">
                                    <option value=""></option>
                                </select>
                                @error('fk_city_id')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="row col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="areaselect">Select Area</label>
                            </div>
                            <div class="col-md-8">
                                <select required disabled class="form-control form-control-alternative areaselect" id="areaselect" name="fk_area_id">
                                    <option value=""></option>
                                </select>
                                @error('fk_area_id')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="subarea_name">Sub-Area Name</label>
                            </div>
                            <div class="col-md-8">
                                <input required disabled type="text" id="subarea_name" name="subarea_name" class="form-control form-control-alternative subarea_name" 
                                placeholder="Sub-Area Name">
                                @error('subarea_name')
                                    <span class="ml-auto mr-auto" style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
