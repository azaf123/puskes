@extends('templatedinda.master')
@section('title', 'Nomor Berobat')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Nomor Berobat</h4>
                    <p class="card-description">
                        Isi Nomor Berobat(cth: umum-01)
                    </p>
                    <form action="{{ url('/master-data/treatment/'.$treatment->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleSelectGender">Nomor Berobat</label>
                            <select class="form-control" id="exampleSelectGender" name="noberobat">
                                @for($i=1000; $i<=1500; $i++)
                                <option value={{$i}}>{{$i}}</option>
                                @endfor
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