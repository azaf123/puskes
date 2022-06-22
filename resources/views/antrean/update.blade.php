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
                    <form action="{{ url('/master-data/antrean/'.$antrean->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleSelectGender">No Antrean</label>
                            <select class="form-control" id="exampleSelectGender" name="noantrean">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
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