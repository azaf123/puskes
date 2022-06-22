@extends('templatedinda.master')
@section('title', 'Dokter')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Dokter</h4>
                    <p class="card-description">
                        Edit Data Dokter
                    </p>
                    <form action="{{ url('/master-data/doctor/'.$doctor->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleSelectGender">Nama Dokter</label>
                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName1" placeholder="nama" value="{{$doctor->nama}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">Alamat</label>
                                <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName1" placeholder="deskripsi" value="{{$doctor->alamat}}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">Spesialisasi</label>
                                <input name="spesialisasi" type="text" class="form-control @error('spesialisasi') is-invalid @enderror" id="exampleInputName1" placeholder="deskripsi" value="{{$doctor->spesialisasi}}">
                                @error('spesialisasi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">No HP</label>
                                <input name="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" id="exampleInputName1" placeholder="deskripsi" value="{{$doctor->no_hp}}">
                                @error('nohp')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">Foto</label>
                                <input name="foto" type="file" class="form-control @error('foto') is-invalid @enderror">
                                @error('foto')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
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