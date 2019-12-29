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
                            <th scope="col">Serial No</th>
                            <th scope="col">School Name</th>
                            <th scope="col">School Branch</th>
                            <th scope="col">City Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 0;
                        @endphp
                    {{-- @foreach ($locations as $location) --}}
                        <tr>
                            <th scope="row">
                                {{++$serial}}
                            </th>
                            <td>
                                {{-- {{ $location->province_name}} --}}
                            </td>
                            <td>
                                {{-- {{ $location->city_name}} --}}
                            </td>
                            <td>
                                {{-- {{ $location->area_name}} --}}
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
