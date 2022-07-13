@extends('templatedinda.master')
@section('title', 'Data Artikel')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Galeri</h4>
                        <img src="{{ asset('img/' . $galery->gambar) }}" alt="" width="250px" height="300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
