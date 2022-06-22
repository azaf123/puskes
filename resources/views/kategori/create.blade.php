@extends('templatedinda.master')
@section('title', 'Poli')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Poli</h4>
                    <p class="card-description">
                        Isi Poli(cth: umum-01)
                    </p>
                    <form action="{{url('/master-data/category')}}" method="POST" class="forms-sample">
                        @csrf
                         <div class="form-group">
                            <label for="exampleSelectGender">Poliklinik</label>
                            <select class="form-control" id="exampleSelectGender" name="poli">
                                <option value="Umum">Umum</option>
                                <option value="Gigi">Gigi dan Mulut</option>
                                <option value="Anak">Anak</option>
                                <option value="ibu dan anak">Ibu dan Anak</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">Ruangan</label>
                                <input name="ruangan" type="text" class="form-control @error('ruangan') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Poli-nomor">
                                @error('ruangan')
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