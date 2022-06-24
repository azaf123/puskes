@extends('templatedinda.master')
@section('title', 'Data Doctoe')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Doctor</h4>
                    
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('img/'.$doctor->foto)}}" alt="" width="500px" height="auto">
                        </div>
                        <div class="col">
                            <p>Nama Dokter : {{$doctor->nama}}</p>
                            <p>Spesialisasi : {{$doctor->spesialisasi}}</p>
                            <p>Alamat : {{$doctor->alamat}}</p>
                            <p>No HP : {{$doctor->no_hp}}</p>
                           
                    
                        </div>
                    
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop