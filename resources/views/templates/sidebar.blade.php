<style>
    .logo-pertamina img {
        width: auto;
        height: auto;
        max-width: 100%;
        max-height: 100%;


    }

    #myDiv {
        display: none;
        text-align: center;
        
    }
</style>

<div id="app">
    
  
        <div class="sidebar-wrapper active">
            <div class="logo-pertamina">
                <!-- <img src="{{ asset('assets\images\logo\pertamina.png') }}" alt=""> -->
                <h1>Logo</h1>
            </div>
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <!-- logo pertamina -->

                    <div class="col">
                        <h6>Rumah Sakit</h6>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>

            <div id="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>
                    <li class="sidebar-item @if(Request::segment(2)=='') active @endif">
                        <a href="{{url('/master-data/')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill mr-1"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item @if(Request::segment(2)=='pasien') active @endif">
                        <a href="{{url('/master-data/pasien')}}" class='sidebar-link'>
                        <span class="fa-fw select-all fas"></span>
                            <span>Data Pasien Lama</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if(Request::segment(2)=='pasienbaru') active @endif">
                        <a href="{{url('/master-data/pasienbaru')}}" class='sidebar-link'>
                        <span class="fa-fw select-all fas"></span>
                            <span>Data Pasien Baru</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if(Request::segment(2)=='antrean') active @endif">
                        <a href="{{url('/master-data/antrean')}}" class='sidebar-link'>
                        <span class="fa-fw select-all fas"></span>
                            <span>Data Antrean</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if(Request::segment(2)=='kategori') active @endif">
                        <a href="{{url('/master-data/kategori')}}" class='sidebar-link'>
                        <span class="fa-fw select-all fas"></span>
                            <span> Data Kategori</span>
                        </a>
                    </li>
                    <li class="sidebar-item @if(Request::segment(2)=='treatment') active @endif">
                        <a href="{{url('/master-data/treatment')}}" class='sidebar-link'>
                        <span class="fa-fw select-all fas"></span>
                            <span> Data Berobat</span>
                        </a>
                    </li>
                  
                    <li class="sidebar-item sidebar-item @if(Request::segment(2)=='logout') active @endif">
                        <a href="{{url('/logout')}}" class='sidebar-link'>
                        <span class="fa-fw select-all fas"></span>
                            <span> Log Out</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Laporan</li>
<!-- 
                    <li class="sidebar-item @if(Request::segment(2)=='laporan') active @endif">
                        <a href="{{url('laporan/laporan')}}" class='sidebar-link'>
                            <i class="fa-solid fa-book"></i>
                            <span>Laporan Data Pengunjung</span>
                        </a>
                    </li> -->
                    <li class="sidebar-item @if(Request::segment(2)=='laporan') active @endif">
                        <a href="{{url('/master-data/laporan/cetakformpertanggal')}}" class='sidebar-link'>
                        <span class="fa-fw select-all fas"></span>
                            <span>Laporan Data Pengunjung</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
</div>