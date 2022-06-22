@extends('templatedinda.master')
@section('title', 'galery')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit galery</h4>
                    <p class="card-description">
                        Edit Data galery
                    </p>
                    <form action="{{ url('/master-data/galery/'.$galery->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
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