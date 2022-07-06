@extends('templatedinda.master')
@section('title', 'Detail Pendaftaran Pasien')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Pendaftaran Pasien</h4>
                        <p class="card-description">
                            Silahkan Print
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="form">No. RM</label>
                                <h6>{{ $patient->no_rm }}</h6>
                            </div>

                            <div class="form-group">
                                <label for="form">Nama Lengkap Pasien</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Poli</label>
                                {{-- <h5>{{ $category->nama_kategori }}</h5> --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Ruangan</label>
                                {{-- <h5>{{ $category->ruangan }}</h5> --}}
                            </div>
                            <div class="form-group">
                                <label>  No Antrian</label>
                                <h5>{{ $antrean->no_antrean  }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Keluhan</label>
                                <h5>{{ $reservation->keluhan }}</h5>
                            </div>
                        </form>
                        <button class="btn btn-primary">
                            <a href="{{url('/master-data/print-identitas')}}">Cetak</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

   


@stop
