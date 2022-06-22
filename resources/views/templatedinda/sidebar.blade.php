<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <!-- pasien -->
    <li class="nav-item nav-category">Pasien</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">Pendaftaran Pasien </span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item sidebar-item @if(Request::segment(0)=='pasienlama') active @endif"> <a class="nav-link" href="{{url('/master-data/pasien/create')}}">Pasien Lama</a></li>
          <li class="nav-item sidebar-item @if(Request::segment(0)=='pasienbaru') active @endif"> <a class="nav-link" href="{{url('/master-data/pasienbaru/create')}}">Pasien Baru</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(1)=='reservasi') active @endif">
      <a class="nav-link" href="{{url('/master-data/reservation/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Reservasi</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(1)=='pasien') active @endif">
      <a class="nav-link" href="{{url('/master-data/pasien/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Pasien Lama</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(1)=='datapasienbaru') active @endif">
      <a class="nav-link" href="{{url('/master-data/pasienbaru/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Pasien Baru</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(2)=='poli') active @endif">
      <a class="nav-link" href="{{url('/master-data/category/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Poli</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(2)=='noberobat') active @endif">
      <a class="nav-link" href="{{url('/master-data/treatment/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data No berobat</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(2)=='dokter') active @endif">
      <a class="nav-link" href="{{url('/master-data/doctor/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Dokter</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(2)=='artikel') active @endif">
      <a class="nav-link" href="{{url('/master-data/article/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Artikel</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(2)=='galery') active @endif">
      <a class="nav-link" href="{{url('/master-data/galery/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Galery</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(2)=='header') active @endif">
      <a class="nav-link" href="{{url('/master-data/header/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Header</span>
      </a>
    </li>
    <li class="nav-item sidebar-item @if(Request::segment(2)=='layanan') active @endif">
      <a class="nav-link" href="{{url('/master-data/layanan/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Data Layanan</span>
      </a>
    </li>
  
    <li class="nav-item sidebar-item @if(Request::segment(2)=='antrean') active @endif">
      <a class="nav-link" href="{{url('/master-data/antrean/')}}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Nomor Antrian</span>
      </a>
    </li>
    <!-- end pasien -->

    <li class="nav-item nav-category">Landing Page</li>
    <li class="nav-item">
      <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Artikel</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Galeri</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Poli</span>
      </a>
    </li>
</nav>