<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="#">
        <h1 style="color:#5e72e4">Registrations.pk</h1>
        <img src="{{asset('img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset('img/theme/team-1-800x800')}}.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{asset('img/brand/blue.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-btn @if(\Request::route()->getName() == 'home') active @endif" href="{{route('home')}}"> <i class="fa fa-home text-primary"></i>Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-friends text-blue"></i> Manage Users <i class="fa fa-caret-down dropbtn"></i>
            </a>
            <div class="dropdown-container">
              <a class="dropdown-item @if(\Request::route()->getName() == 'viewuser') active @endif" href="{{route('viewuser')}}">View Users</a>
              <a class="dropdown-item @if(\Request::route()->getName() == 'adduser') active @endif" href="{{route('adduser')}}">Add Users</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-school text-orange"></i> Manage Schools <i class="fa fa-caret-down dropbtn"></i>
            </a>
            <div class="dropdown-container">
              <a class="dropdown-item" href="#">View Schools</a>
              <a class="dropdown-item" href="#">Add Schools</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-registered text-yellow"></i> Registrations <i class="fa fa-caret-down dropbtn"></i>
            </a>
            <div class="dropdown-container">
              <a class="dropdown-item" href="#">School Registration</a>
              <a class="dropdown-item" href="#">NGO Registration</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-map-marker-alt text-red"></i> Manage Locations <i class="fa fa-caret-down dropbtn"></i>
            </a>
            <div class="dropdown-container">
              <a class="dropdown-item" href="#">View Cities</a>
              <a class="dropdown-item" href="#">View Areas</a>
              <a class="dropdown-item" href="#">View SubAreas</a>
              <a class="dropdown-item" href="#">Add Cities</a>
              <a class="dropdown-item" href="#">Add Areas</a>
              <a class="dropdown-item" href="#">Add SubAreas</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-newspaper text-info"></i> News and Events <i class="fa fa-caret-down dropbtn"></i>
            </a>
            <div class="dropdown-container">
              <a class="dropdown-item" href="#">View news</a>
              <a class="dropdown-item" href="#">view Events</a>
              <a class="dropdown-item" href="#">Add News</a>
              <a class="dropdown-item" href="#">Add Events</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-btn">
              <i class="far fa-envelope text-pink"></i> Messages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-cogs text-brown"></i> Settings <i class="fa fa-caret-down dropbtn"></i>
            </a>
            <div class="dropdown-container">
              <a class="dropdown-item" href="#">Entity type</a>
              <a class="dropdown-item" href="#">Category</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-btn" href="#">
              <i class="fas fa-map-marked-alt text-purple"></i> School Geo Locator <i class="fa fa-caret-down dropbtn"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-btn" href="#">
              <i class="fas fa-sign-out-alt "></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>