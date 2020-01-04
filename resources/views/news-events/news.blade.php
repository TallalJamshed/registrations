@extends('template.template2')
@section('content')

{{-- Adding School Branch--}}
<div class="container-fluid mb-5">
    <form  method="POST" action="{{route('addnews')}}">
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
                                <label style="font-weight:bold" class="" for="msg_title">News Title</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="msg_title" name="msg_title" class="form-control form-control-alternative" 
                                placeholder="News Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="thumbnail_string">News Thumbnail</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" id="thumbnail_string" name="thumbnail_string" class="form-control form-control-alternative" 
                                placeholder="News Image">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="newsevent_message">News Message</label>
                            </div>
                            <div class="col-md-6">
                                <textarea name="newsevent_message" id="newsevent_message" class="form-control" rows="3"></textarea>
                                {{-- <input type="text" id="newsevent_message" name="newsevent_message" class="form-control form-control-alternative" 
                                placeholder="News Message"> --}}
                            </div>
                        </div>
                    {{-- </div>
                    <div class="row mt-4"> --}}
                        {{-- <div class="col-md-6">
                            <div class="col-md-4">
                                <label style="font-weight:bold" class="" for="fk_province_id">Select Province</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control form-control-alternative povselect" id="fk_province_id" name="fk_province_id">
                                    <option value="1">Active</option>
                                    <option value="2">De-Activated</option>
                                    
                                  </select>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

@endsection
