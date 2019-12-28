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
                <h3 class="mb-0">Latest Schools</h3>
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
                  <th scope="col">School name</th>
                  <th scope="col">City</th>
                  <th scope="col">Area</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">/argon/</th>
                  <td>4,569</td>
                  <td>340</td>
                  <td><i class="fas fa-arrow-up text-success mr-3"></i> 46,53%</td>
                </tr>
                <tr>
                  <th scope="row">/argon/index.html</th>
                  <td>3,985</td>
                  <td>319</td>
                  <td><i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%</td>
                </tr>
                <tr>
                  <th scope="row">/argon/charts.html</th>
                  <td>3,513</td>
                  <td>294</td>
                  <td><i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%</td>
                </tr>
                <tr>
                  <th scope="row">/argon/tables.html</th>
                  <td>2,050</td>
                  <td>147</td>
                  <td><i class="fas fa-arrow-up text-success mr-3"></i> 50,87%</td>
                </tr>
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
                <h3 class="mb-0">New Users</h3>
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
                  <th scope="col">Role</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Facebook</th>
                  <td>1,480</td>
                  <td>Temporary user</td>
                </tr>
                <tr>
                  <th scope="row">Facebook</th>
                  <td>1,480</td>
                  <td>Temporary user</td>
                </tr>
                <tr>
                  <th scope="row">Facebook</th>
                  <td>1,480</td>
                  <td>Temporary user</td>
                </tr>
                <tr>
                  <th scope="row">Facebook</th>
                  <td>1,480</td>
                  <td>Temporary user</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endsection