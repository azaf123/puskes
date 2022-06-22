@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')

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