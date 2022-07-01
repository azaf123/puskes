@extends('front.material.master')
@section('title', 'Landing Page')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

@section('content')

<!-- artikel section starts  -->

<section class="artikel" id="artikel">

    <div class="heading">
        <span>Artikel</span>
        <h3>INFO MAIL</h3>
    </div>
    <div class="row">
        @foreach ($article as $item)
        <div class="col-lg-3">
            <div class="card">
                <img src="{{ asset('img/' . $item->gambar) }}" width="30px" height="auto" class="card-img-top" alt="">
                <div class="card-body" data-name="artikel-{{ $item->id }}">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                    <button type="button" class="btn">
                        Go somewhere</button>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</section>

<section class="artikel-preview-container">

    <div id="close-preview" class="fas fa-times"></div>

    @foreach ($article as $item)
    <div class="artikel-preview" data-target="artikel-{{ $item->id }}">
        <img src="{{ asset('img/' . $item->gambar) }}" width="450px" height="550px" style="object-fit: cover;" alt="">
        <p>
            {{ $item->konten }}
        </p>
    </div>
    @endforeach

</section>

{{-- <div class="swiper artikel-slider" style="height: 450px;">
            <div class="swiper-wrapper">
                @foreach ($article as $item)
                    <div class="swiper-slide slide" >
                        <img src= alt="">
                        <h3>{{ $item->judul }}</h3>
<button type="button" class="btn">Baca Yuk!</button>
</div>
@endforeach
</div>
</div> --}}





</section>

<!-- artikel section ends -->

<!-- artikel preview section starts  -->

<section class="artikel-preview-container">

    <div id="close-preview" class="fas fa-times"></div>

    @foreach ($article as $item)
    <div class="artikel-preview" data-target="artikel-{{ $item->id }}">
        <img src="{{ asset('img/' . $item->gambar) }}" alt="">
        <p>
            {{ $item->konten }}
        </p>
    </div>
    @endforeach

</section>

@stop