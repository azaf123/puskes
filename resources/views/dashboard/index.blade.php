@extends('templatedinda.master')
@section('title', 'Home Admin')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
              <div class="row">
                <div class="col-sm-12">
                  <div class=" d-flex align-items-center justify-content-between">
                    <div>
                      <p class="statistics-title">Pendaftaran Pasien</p>
                      <h3 class="rate-percentage">5</h3>
                    </div>
                    <div>
                      <p class="statistics-title">Pasien Lama</p>
                      <h3 class="rate-percentage">4</h3>
                    </div>
                    <div>
                      <p class="statistics-title">Pasien Baru</p>
                      <h3 class="rate-percentage">3</h3>
                    </div>
                    <div>
                      <p class="statistics-title">Artikel</p>
                      <h3 class="rate-percentage">3</h3>
                    </div>
                    <div>
                      <p class="statistics-title">Galeri</p>
                      <h3 class="rate-percentage">3</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body text-center">
            <div class="row mt-3">
              <h4 class="card-title">Halo, Selamat Datang</h4>
            </div>
            <div class="d-flex mt-3 align-items-top">
              <div class="ms-auto">
                <i class="mdi mdi-heart-outline text-muted"></i>
              </div>
              <div class="mb-0 flex-grow">
                <h5 class="me-2 mb-2">Selamat Datang di Sistem Informasi Puskesmas 5 Ilir Palembang</h5>
                <p class="mb-0 font-weight-light">Sistem ini digunakan agar staff pendaftaran dapat mengelola
                  website Puskesmas 5 Ilir Palembang serta mengelola pendaftaran pasien </p>
              </div>
              <div class="ms-auto">
                <i class="mdi mdi-heart-outline text-muted"></i>
              </div>
            </div>
            <br>
            <div class="d-flex">
              <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                <i class="mdi mdi-account-outline icon-sm me-2"></i>
                <span>AdindaCantikaA</span>
              </div>
              <div class="d-flex align-items-center text-muted font-weight-light">
                <i class="mdi mdi-clock icon-sm me-2"></i>
                <span>June 20, 2022</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title">Visi</h4>
            <p>
              Tercapainya Wilayah Kerja yang sehat secara optimal dengan bertumpu pada pelayanan prima dan pemberdayaan masyarakat
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">Misi</h4>
            <ul class="list-arrow">
              <li>Memelihara dan meningkatkan upaya pelayanan prima</li>
              <li>Meningkatkan profesionalisme provider</li>
              <li>Meningkatkan kemitraan dan pemberdayaan masyarakat</li>
              <li>Menurunkan angka kesakitan dan resiko kematian</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body text-center">
            <h4 class="card-title">Motto</h4>
            <p>
Kesehatan adalah tanggung jawab bersama                  </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Informasi Kontak</h4>
            <div class="row">
              <div class="col-md-6">
                <address>
                  <p>
                    <b> Alamat Lokasi</b>
                  </p>
                  <p>
                    Jalan Jendral Jl. Bambang Utoyo No.1095
                  </p>
                  <p>
                     5 Ilir, Kec. Ilir Tim. II 
                  </p>
                  <p>
                    Kota Palembang, Sumatera Selatan, 30111
                  </p>
                </address>
              </div>
              <div class="col-md-6">
                <address class="text-primary">
                  <p class="fw-bold">
                    Alamat Web
                  </p>
                  <p>
                    www.puskesmas5ilirpalembang.com
                  </p>
                  <p class="fw-bold">
                    No. Telp
                   </p>
                   <p class="mb-2">
                     (0711) 5625790
                   </p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
