@extends('templatedinda.master')
@section('title', 'Data Artikel')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Header</h4>
                    <h3 class="card-description">
                        {{$header->judul}}
                    </h3>
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('img/'.$header->gambar)}}" alt="" width="500px" height="auto">
                        </div>
                       
                    </div>
                    <div class="col-12 mt-3">
                        {{ $header->konten }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop