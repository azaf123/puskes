@extends('templatedinda.master')
@section('title', 'Reservasi')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Reservasi</h4>
                    <p class="card-description">
                        Isi Reservasi
                    </p>
                    <form action="{{ url('/master-data/reservation/'.$reservation->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleSelectGender">Reservasiklinik</label>
                            <select class="form-control" id="exampleSelectGender" name="Reservasi">
                                <option value="Umum">Umum</option>
                                <option value="Gigi">Gigi dan Mulut</option>
                                <option value="Anak">Anak</option>
                                <option value="ibu dan anak">Ibu dan Anak</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">Ruangan</label>
                                <input name="ruangan" type="text" class="form-control @error('ruangan') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Reservasi-nomor" value="{{$reservation->ruangan}}">
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