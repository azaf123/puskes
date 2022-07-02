@extends('front.material.master')
@section('title', 'Landing Page')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

@section('content')

<!-- artikel section starts  -->
<style>
    .cardmaster{
        width: 100%;
        height: 500px;
        border-radius: 10px;
        border: 2px solid #ccc;
        padding: 30px;
   
    }
 
    .customimg {
        width: 100%;
        height: 200px;



    }
</style>
<section class="artikel" id="artikel">

    <div class="heading">
        <span>Artikel</span>
        <h3>INFO MAIL</h3>
    </div>


    <div class="row">
        @foreach ($article as $item)
        <div class="col-lg-4 cardmaster m-1 ">
            <img class="customimg" src="{{ asset('img/' . $item->gambar) }}" width="350px" height="550px" style="object-fit: cover;" alt="">
            <div class="slide customcard" style="height: 450px;" data-name="artikel-{{ $item->id }}">

                <h3>{{ $item->judul }}</h3>
                <button type="button" class="btn">Baca Yuk!</button>
            </div>
        </div>

        @endforeach
    </div>





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