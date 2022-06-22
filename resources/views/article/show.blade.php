@extends('templatedinda.master')
@section('title', 'Data Artikel')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Artikel</h4>
                    <p class="card-description">
                        {{$article->judul}}
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('img/'.$article->gambar)}}" alt="" width="500px" height="auto">
                        </div>
                        <div class="col-6">
                        {{ $article->konten }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop