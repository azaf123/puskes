@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')

<section class="home" id="home">

   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         @foreach($header as $item)
         <div class="swiper-slide slide" style="background-image: url('{{asset('img/'. $item->gambar)}}');">
            <div class="content">
               <h3>{{$item->judul}}</h3>
               <span>{{$item->konten}}</span>
               <a href="#" class="btn">get started</a>
            </div>
         </div>
         @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="{{asset('front/images/about-img.png')}}" alt="">
   </div>

   <div class="content">
      <h3 class="title">Selamat Datang di Website
         Puskesmas 5 Ilir Palembang</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi optio at, saepe accusamus dolorum, quos eos
         nesciunt amet exercitationem illum quis nostrum, repellat quaerat eum debitis fugit alias magnam omnis!</p>
      <a href="#" class="btn">read more</a>
      <div class="icons-container">
         <div class="icons">
            <img src="{{asset('front/images/aboutt.png')}}" alt="">
            <h3>Total Care</h3>
         </div>
         <div class="icons">
            <img src="{{asset('front/images/about2.png')}}" alt="">
            <h3>Pendaftaran Online</h3>
         </div>
         <div class="icons">
            <img src="{{asset('front/images/about3.png')}}" alt="">
            <h3>Expert Doctors</h3>
         </div>

      </div>
   </div>

</section>

<!-- about section ends -->

<section class="doctor" id="doctor">

   <div class="heading">
      <h3>Dokter Kami</h3>
      <span>di Puskesmas 5 Ilir Palembang</span>
   </div>

   <div class="swiper doctor-slider">

      <div class="swiper-wrapper">
         @foreach($doctor as $item)
         <div class="swiper-slide slide">
            <div class="image">
               <img src="{{asset('img/'. $item->foto)}}" alt="">
               <span>burger</span>
            </div>
            <div class="content">
               <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> Senin-Kamis </a>
                  <a href="#"> <i class="fas fa-clock"></i> 09.00-11.00 </a>
               </div>
               <a href="#" class="title">{{$item ->nama}}</a>
               <p>Dokter{{$item->spesialisasi}}</p>
               <a href="#" class="btn">Reservasi</a>
            </div>
         </div>
         @endforeach


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- artikel section starts  -->

<section class="artikel" id="artikel">

   <div class="heading">
      <span>Artikel</span>
      <h3>INFO MAIL</h3>
   </div>

   <div class="swiper artikel-slider" style="height: 450px;">

      <div class="swiper-wrapper">

         @foreach($article as $item)
         <div class="swiper-slide slide" style="height: 450px;" data-name="artikel-{{
         $item->id
      }}">
            <img src="{{asset('img/'. $item->gambar )}}" width="350px" height="550px" style="object-fit: cover;" alt="">
            <h3>{{
            $item->judul
             }}</h3>
            <button type="button" class="btn">Baca Yuk!</button>
         </div>
         @endforeach



      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- artikel section ends -->

<!-- artikel preview section starts  -->

<section class="artikel-preview-container">

   <div id="close-preview" class="fas fa-times"></div>

   @foreach($article as $item)
   <div class="artikel-preview" data-target="artikel-{{
         $item->id
      }}">
      <img src="{{asset('img/'. $item->gambar )}}" width="450px" height="550px" style="object-fit: cover;" alt="">
      <p>
         {{
         $item->konten
      }}
      </p>
   </div>
   @endforeach

</section>
<section class="layanan" id="layanan">

   <div class="heading">
      <h3>Jenis Pelayanan</h3>
      <span>di Puskesmas 5 Ilir Palembang</span>
   </div>

   <div class="swiper layanan-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide">
            <h3 class="title">Upaya Kesehatan Perorangan (Dalam Gedung) </h3>
            <div class="box-container">
               @foreach($layanan as $item)
               <div class="box">
                  <div class="info">
                     <img src="{{url('img/'. $item->gambar)}}" width="550px" height="550px" style="object-fit: cover;" alt="">
                     <h3>{{$item->judul}}</h3>
                     <p>{{$item->konten}}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <div class="heading">
      <span>our gallery</span>
      <h3>our untold stories</h3>
   </div>

   <div class="gallery-container">
      @foreach($galery as $item)
      <a href="{{url('img/' . $item->gambar)}}" class="box">
         <img src="{{url('img/' . $item->gambar)}}" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>
      @endforeach
   </div>


   `


</section>

<!-- gallery section ends -->

@stop

<!-- <div class="swiper-slide slide" style="background-image: url('{{asset('/front/images/home1.jpg')}}');">
            <div class="content">
               <h3>Jadwal Pelayanan</h3>
               <span>Senin-Kamis: 08.30-14.00 </span>
               <span>Jumat: 08.30-13.00 </span>
               <span>Sabtu: 08.30-13.30 </span>
               <a href="#" class="btn">get started</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url('{{asset('/front/images/home-slide-3.jpg')}}');">
            <div class="content">
               <span>outstanding artikel</span>
               <h3>authentic kitchen</h3>
               <a href="#" class="btn">get started</a>
            </div>
         </div> -->