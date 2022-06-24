@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')

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
                <img src="{{asset('img/'. $item->gambar )}}"width="350px" height="550px" style="object-fit: cover;" alt="">
                <h3>{{
            $item->judul
             }}</h3>
                <button type="button" class="btn">Baca Yuk!</button>
            </div>
            @endforeach



        </div>

       

    </div>
    <div class="swiper-pagination"></div>
</section>

<!-- artikel section ends -->

<!-- artikel preview section starts  -->

<section class="artikel-preview-container">

    <div id="close-preview" class="fas fa-times"></div>

    @foreach($article as $item)
    <div class="artikel-preview" data-target="artikel-{{
         $item->id
      }}">
        <img src="{{asset('img/'. $item->gambar )}}" alt="">
        <p>
            {{
         $item->konten
      }}
        </p>
    </div>
    @endforeach

</section>

@stop