@extends('templatedinda.master')
@section('title', 'Antrean')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Antrean</h4>
                    <p class="card-description">
                        Isi Antrean(cth: umum-01)
                    </p>
                    <form action="{{url('/master-data/antrean')}}" method="POST" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelectGender">No Antrean</label>
                            <input type="number" class="form-control" name="noantrean" >
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Poli</label>

                                <select class="form-control @error('poli') is-invalid @enderror" id="poli" name="poli" onchange="">
                                    <!-- using FOREIGN ID -->
                                    @foreach ($category as $item)
                                    <option value="" disabled selected hidden>Pilih Poli</option>
                                    <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                    @endforeach
                                </select>
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