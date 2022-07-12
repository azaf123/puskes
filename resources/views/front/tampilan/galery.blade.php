@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <div class="heading">
      <h3>Galeri Kami</h3>
      <span>Di Puskesmas 5 Ilir Palembang</span>
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