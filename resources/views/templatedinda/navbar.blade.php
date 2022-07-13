<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="{{ url('/master-data/dashboard') }}">
                <img src="{{ asset('front/images/logonavbar.png') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('/master-data/dashboard') }}">
                <img src="{{ asset('front/images/logo-puskesmas-32976.png') }}" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Hallo, 
                    <span class="text-black fw-bold"> 
                        {{ Auth::user()->name }} 
                    </span>
                </h1>
                <h3 class="welcome-sub-text"> "As we advance in life, we learn the limits of our abilities." (Henry
                    Ford) </h3>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{ asset('front/images/logo-puskesmas-32976.png') }}"
                        alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }} </p>
                        <p class="fw-light text-muted mb-0">{{ Auth::user()->email }} </p>
                    </div>
                </div>
            </li>
            <li class="nav-item  d-none d-lg-block">
                <ul class="nav-item py-3">
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  d-none d-lg-block">
                <ul class="nav-item py-3">
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="{{ url('/logout') }}">
                            <i class="mdi mdi-logout-variant"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>

    </div>
</nav>
