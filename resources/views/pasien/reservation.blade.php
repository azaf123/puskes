@extends('templatedinda.master')
@section('title', 'Pasien')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Pendaftaran Pasien Baru</h4>
                    <p class="card-description">
                        Data Kunjungan
                    </p>
                    <form action="{{url('/master-data/pasienbaruReservation')}}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelectGender">Poliklinik</label>
                            <select name="poli" class="form-control" id="exampleSelectGender">
                                @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Nomor Antrian</label>
                            <select name="antrean" class="form-control" id="exampleSelectGender">
                                @foreach($antrean as $item)
                                <option value="{{$item->id}}">{{$item->no_antrean}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Download Tiket</button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@stop