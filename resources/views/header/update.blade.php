@extends('templatedinda.master')
@section('title', 'Header')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Header</h4>
                    <p class="card-description">
                        Edit Data Header
                    </p>
                    <form action="{{ url('/master-data/header/'.$header->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputName1">Judul</label>
                                    <input name="judul" type="text" class="form-control" id="exampleInputName1" placeholder="Isi Judul Header" value="{{$header->judul}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputName1">Deskripsi</label>
                                    <input name="konten" type="text" class="form-control" id="exampleInputName1" placeholder="Isi Deskripsi" value="{{$header->konten}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload Header</label>
                                <input type="file" name="foto" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
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