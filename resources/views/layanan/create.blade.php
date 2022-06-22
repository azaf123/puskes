@extends('templatedinda.master')
@section('title', 'Layanan')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Layanan</h4>
                    <p class="card-description">
                        Isi Layanan
                    </p>
                    <form action="{{url('/master-data/layanan')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelectGender">Judul</label>
                            <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" id="exampleInputName1" placeholder="judul">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">konten</label>
                                <input name="konten" type="text" class="form-control @error('konten') is-invalid @enderror" id="exampleInputName1" placeholder="deskripsi">
                                @error('konten')
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