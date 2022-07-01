@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')
<section class="layanan" id="layanan">

<div class="heading">
   <h3>Pendaftaran Online</h3>
   <span>Pendaftaran Dapat Dilakukan H-1 Sebelum Kedatangan</span>
</div>

<div class="swiper layanan-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <h3 class="title">Kategori Pasien</h3>
         <div class="box-container">
            <div class="box">
               <div class="info">
                  <h3>Pasien Baru</h3>
                  <a href="{{url('/pendaftaran-pasien-baru/create')}}" class="btn">Daftar</a>
               </div>
            </div>
            <div class="box">
               <div class="info">
                  <h3>Pasien Lama</h3>
                  <a href="{{url('/pendaftaran-pasien-lama/create')}}" class="btn">Daftar</a>
               </div>
            </div>
          
            
         </div>
      </div>


</div>

</section>


@stop