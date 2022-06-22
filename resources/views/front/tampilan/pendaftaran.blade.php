@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')
<section class="layanan" id="layanan">

<div class="heading">
   <h3>Pendaftaran Online</h3>
   <span>di Puskesmas 5 Ilir Palembang</span>
</div>

<div class="swiper layanan-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <h3 class="title">Jadwal Dokter</h3>
         <div class="box-container">
            <div class="box">
               <div class="info">
                  <h3>Pasien Baru</h3>
                  <!-- <p>POLIKLINIK PENYAKIT DALAM</p> -->
                  <a href="{{url('/pendaftaran-pasien-baru/create')}}" class="btn">Reservasi</a>
               </div>
               <div class="price">08.00-12.00</div>
            </div>
            <div class="box">
               <div class="info">
                  <h3>Pasien Lama</h3>
                  <!-- <p>Dokter Umum</p> -->
                  <a href="{{url('/pendaftaran-pasien-lama/create')}}" class="btn">Reservasi</a>
               </div>
               <div class="price">08.00-12.00</div>
            </div>
          
            
         </div>
      </div>


</div>

</section>


@stop