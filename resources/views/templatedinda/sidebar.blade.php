<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        

        <li class="nav-item @if (Request::segment(1) == 'home') active @endif">
            <a class="nav-link" href="{{ url('/master-data/dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Pasien</li>
        {{-- pendaftaran --}}
        
        <li class="nav-item sidebar-item @if (Request::segment(1) == 'reservasi') active @endif">
            <a class="nav-link" href="{{ url('/master-data/reservation/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Pendaftaran Pasien</span>
            </a>
        </li>
        {{-- . --}}

        <!-- identitas -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Identitas Pasien </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item sidebar-item @if (Request::segment(1) == 'pasien') active @endif">
                        <a class="nav-link" href="{{ url('/master-data/patient/') }}">Pasien Lama</a>
                    </li>
                    <li class="nav-item sidebar-item @if (Request::segment(1) == 'datapasienbaru') active @endif">
                        <a class="nav-link" href="{{ url('/master-data/pasienbaru/') }}">Pasien Baru</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- . --}}


        {{-- <li class="nav-item sidebar-item @if (Request::segment(2) == 'pasien') active @endif">
      <a class="nav-link" href="{{url('/master-data/patient/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Pasien Lama</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if (Request::segment(1) == 'datapasienbaru') active @endif">
      <a class="nav-link" href="{{url('/master-data/pasienbaru/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Pasien Baru</span>
      </a>
    </li> --}}
        <li class="nav-item nav-category">Poli</li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'poli') active @endif">
            <a class="nav-link" href="{{ url('/master-data/category/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Data Poli</span>
            </a>
        </li>
        <li class="nav-item nav-category">Antrian</li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'antrean') active @endif">
          <a class="nav-link" href="{{ url('/master-data/antrean/') }}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Nomor Antrian</span>
          </a>
      </li>

        {{-- dakpakek --}}
        {{-- <li class="nav-item sidebar-item @if (Request::segment(2) == 'noberobat') active @endif">
      <a class="nav-link" href="{{url('/master-data/treatment/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data No berobat</span>
      </a>
    </li> --}}
        {{-- . --}}

        <li class="nav-item nav-category">Landing Page</li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'dokter') active @endif">
            <a class="nav-link" href="{{ url('/master-data/doctor/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Dokter</span>
            </a>
        </li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'artikel') active @endif">
            <a class="nav-link" href="{{ url('/master-data/article/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Data Artikel</span>
            </a>
        </li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'galery') active @endif">
            <a class="nav-link" href="{{ url('/master-data/galery/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Data Galeri</span>
            </a>
        </li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'header') active @endif">
            <a class="nav-link" href="{{ url('/master-data/header/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Data Header</span>
            </a>
        </li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'layanan') active @endif">
            <a class="nav-link" href="{{ url('/master-data/layanan/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Data Layanan</span>
            </a>
        </li>

        
        <!-- end pasien -->

        <li class="nav-item nav-category">Laporan</li>
        <li class="nav-item sidebar-item @if (Request::segment(2) == 'report') active @endif">
            <a class="nav-link" href="{{ url('/master-data/report/') }}">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Laporan </span>
            </a>
        </li>
        <!-- logout -->
        <li class="nav-item sidebar-item">
            <a class="nav-link" href="{{ url('/logout') }}">
                <i class="menu-icon mdi mdi-logout"></i>
                <span class="menu-title">Logout</span>
            </a>

</nav>
