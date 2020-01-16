@extends('template.template2')
@section('content')

<div class="row m-5">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">All Schools</h3>
            </div>
            <div class="table-responsive p-4">
                <table class="table align-items-center table-flush" id="loctable">
                    <thead class="thead-light">
                        <tr>
                            {{-- <th scope="col">Serial No</th> --}}
                            <th scope="col">School Name</th>
                            <th scope="col">School Address</th>
                            <th scope="col">Principal Name</th>
                            <th scope="col">Principal Contact</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($schools as $school)
                        <tr>
                            <td>
                                {{$school->school_name}}({{$school->sc_br_name}})
                            </td>
                            <td>
                                {{$school->sc_br_address}},
                                @if ($school->subarea_name != "NA")
                                    {{$school->subarea_name}},
                                @endif
                                {{$school->area_name}},
                                {{$school->city_name}} 
                            </td>
                            <td>
                                {{$school->principal_name}}
                            </td>
                            <td>
                                {{$school->principal_phone}}
                            </td>
                            <td>
                                {{$school->status_name}}
                            </td>
                            <td>
                                <a href="/school/edit/{{$school->sc_br_id}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                @if(Auth::user()->fk_role_id == 1)
                                    <span data-delid="{{Crypt::encrypt($school->sc_br_id)}}" data-toggle="modal" data-target="#delete_modal" class="btn btn-sm btn-danger delid"><i class="fa fa-trash"></i></span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete Confirmaiton</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    Are you sure you want to delete selected record?
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <form method="POST" action="{{route('deleteschoolbranchindb')}}">
                    @csrf
                    <input type="hidden" name="delete" value="" id="id-to-delete" />
                    <button type="submit" class="btn btn-danger"> Yes </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
