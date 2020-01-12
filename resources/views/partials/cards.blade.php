<!-- Header -->
    <div class="container-fluid">
      <div class="header-body">
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Total Schools</h5>
                    <span class="h2 font-weight-bold mb-0">{{$sc_count}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                      <i class="fas fa-university"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> --}}
                  <span class="text-nowrap">More Info</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Registered</h5>
                    <span class="h2 font-weight-bold mb-0">{{$sc_re_count}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                      <i class="far fa-registered"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  {{-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span> --}}
                  <span class="text-nowrap">More Info</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Un-Registered</h5>
                    <span class="h2 font-weight-bold mb-0">{{$sc_ure_count}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                      <i class="fas fa-exclamation"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  {{-- <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i>1.10%</span> --}}
                  <span class="text-nowrap">More Info</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Under Process</h5>
                    <span class="h2 font-weight-bold mb-0">{{$sc_up_count}}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                      <i class="fas fa-redo-alt"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  {{-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span> --}}
                  <span class="text-nowrap">More Info</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>