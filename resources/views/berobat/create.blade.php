@extends('templatedinda.master')
@section('title', 'treatment')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah treatment</h4>
                    <p class="card-description">
                        Isi treatment(cth: umum-01)
                    </p>
                    <form action="{{url('/master-data/treatment')}}" method="POST" class="forms-sample">
                        @csrf
                         <div class="form-group">
                            <label for="exampleSelectGender">No Berobat</label>
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