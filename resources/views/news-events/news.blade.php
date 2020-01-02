@extends('template.template2')
@section('content')

{{-- Adding School Branch--}}
<div class="container-fluid mb-5">
    <form  method="POST" action="{{route('addschoolbranchindb')}}">
        @csrf
        <div class="col-xl-12 order-xl-1 mt-5">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add News</h3>
                        </div>
                        <div class="col-4 text-right">
                            <input type="submit" value="submit" name="submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="sc_br_name">News Title</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="sc_br_name" name="sc_br_name" class="disable_on_sc_id form-control form-control-alternative" 
                                placeholder="News Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="no_of_boys">News Thumbnail</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="no_of_boys" name="no_of_boys" class="disable_on_sc_id form-control form-control-alternative" 
                                placeholder="News Image">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="sc_br_address">News Message</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="sc_br_address" name="sc_br_address" class="disable_on_sc_id form-control form-control-alternative" 
                                placeholder="News Message">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

@endsection
