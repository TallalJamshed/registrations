@extends('template.template')
@section('content')
<div class="container-fluid mt--7">

    {{-- <div class="row">
      <div class="col-xl-12">
        <div class="card bg-gradient-default shadow">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="text-white mb-0">Schools Registered</h2>
              </div>
              <div class="col">
                <ul class="nav nav-pills justify-content-end">
                  <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                    <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                      <span class="d-none d-md-block">Month</span>
                      <span class="d-md-none">M</span>
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                    <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                      <span class="d-none d-md-block">Week</span>
                      <span class="d-md-none">W</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="chart-sales" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>  --}}
    <div class="row mt-5">
      <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">All Schools</h3>
              </div>
              {{-- <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div> --}}
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>School Name</th>
                  <th>School Address</th>
                  {{-- <th>Principal Name</th> --}}
                  {{-- <th>Principal Contact</th> --}}
                  <th>Status</th>
                  {{-- <th>Actions</th> --}}
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
                        {{-- <td>
                            {{$school->principal_name}}
                        </td> --}}
                        {{-- <td>
                            {{$school->principal_phone}}
                        </td> --}}
                        <td>
                            {{$school->status_name}}
                        </td>
                        {{-- <td>
                            <span class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></span>
                            <span class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
                        </td> --}}
                    </tr>
                @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">All Users</h3>
              </div>
              {{-- <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div> --}}
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">User Name</th>
                  <th scope="col">Email</th>
                  {{-- <th scope="col">Contact No</th>
                  <th scope="col">CNIC</th> --}}
                  <th scope="col">Role</th>
                  {{-- <th scope="col">Action</th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <th scope="row">{{$user->name}}</th>
                  <td>{{$user->email}}</td>
                  {{-- <td>{{$user->contact}}</td>
                  <td>{{$user->cnic}}</td> --}}
                  <td>{{$user->role}}</td>
                  {{-- <td>
                    <span class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></span>
                    <span class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
                  </td> --}}
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endsection