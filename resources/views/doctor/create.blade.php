@extends('templatedinda.master')
@section('title', 'Dokter')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Dokter</h4>
                    <p class="card-description">
                        Isi Dokter
                    </p>
                    <form action="{{url('/master-data/doctor')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Dokter</label>
                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Nama">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">Alamat</label>
                                <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Alamat">
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
                                <input name="spesialisasi" type="text" class="form-control @error('spesialisasi') is-invalid @enderror" id="exampleInputName1" placeholder="deskripsi">
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
                                <input name="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" id="exampleInputName1" placeholder="deskripsi">
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