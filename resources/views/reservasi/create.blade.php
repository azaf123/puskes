@extends('templatedinda.master')
@section('title', 'reservasi')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah reservasi</h4>
                    <p class="card-description">
                        Isi reservasi
                    </p>
                    <form action="{{url('/master-data/reservation')}}" method="POST" class="forms-sample">
                        @csrf
                        <select name="noberobat" class="form-control" id="noberobat">
                            @foreach($treatment as $item)
                            <option value="{{$item->id}}">{{$item->no_berobat}}</option>
                            @endforeach
                        </select>
                        <div class="form-group">
                            <label for="exampleSelectGender">Nama Pasien</label>
                            <select name="nama" class="form-control" id="exampleSelectGender">
                                @foreach($patient as $item)
                                <option value="{{$item->id}}">{{$item->nama_pasien}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Poli</label>
                            <select name="poli" class="form-control" id="exampleSelectGender">
                                @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Antrean</label>
                            <select name="antrean" class="form-control" id="exampleSelectGender">
                                @foreach($antrean as $item)
                                <option value="{{$item->id}}">{{$item->no_antrean}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <button class="btn btn-light">Batal</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@stop