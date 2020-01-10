@extends('template.template2')
@section('content')

<div class="row m-5">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Locations</h3>
            </div>
            <div class="table-responsive p-4">
                <table class="table align-items-center table-flush" id="loctable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Province Name</th>
                            <th scope="col">City Name</th>
                            <th scope="col">Area Name</th>
                            <th scope="col">Sub-Area Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 0;
                        @endphp
                    @foreach ($locations as $location)
                        <tr>
                            <th scope="row">
                                {{++$serial}}
                            </th>
                            <td>
                                {{ $location->province_name}}
                            </td>
                            <td>
                                {{ $location->city_name}}
                            </td>
                            <td>
                                {{ $location->area_name}}
                            </td>
                            <td>
                                {{ $location->subarea_name}}
                            </td>
                            <td>
                                <span class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></span>
                                <span class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row mt-5">
    <div class="col-md-6 pl-6 pr-4"> --}}
        <!-- Dark table -->
        {{-- <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Provinces</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">Province Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serial = 0;
                                @endphp
                            @foreach ($provinces as $province)
                                <tr>
                                    <th scope="row">
                                        {{++$serial}}
                                    </th>
                                    <td>
                                        {{ $province->province_name}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Dark table -->
        {{-- <div class="row mt-5">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Provinces</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">Area Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serial = 0;
                                @endphp
                            @foreach ($provinces as $province)
                                <tr>
                                    <th scope="row">
                                        {{++$serial}}
                                    </th>
                                    <td>
                                        {{ $province->province_name}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pl-4 pr-6"> --}}
        <!-- Dark table -->
        {{-- <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Cities</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">City Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serial = 0;
                                @endphp
                            @foreach ($cities as $city)
                                <tr>
                                    <th scope="row">
                                        {{++$serial}}
                                    </th>
                                    <td>
                                        {{ $city->city_name}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
 
@endsection
