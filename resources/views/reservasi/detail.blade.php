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
                                <h6>{{ $reservation->patient->no_rm }}</h6>
                            </div>

                            <div class="form-group">
                                <label for="form">Nama Lengkap Pasien</label>
                                <h5>{{ $reservation->patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Poli</label>
                                <h5>{{ $reservation->category->nama_kategori}}</h5>
                            </div>
                            <div class="form-group">
                                <label>Ruangan</label>
                                <h5>{{ $reservation->category->ruangan }}</h5>
                            </div>
                            <div class="form-group">
                                <label>No Antrean</label>
                                <h5>{{ $reservation->antrean->no_antrean }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Keluhan</label>
                                <h5>{{ $reservation->keluhan }}</h5>
                            </div>
                           
                            <a class="btn btn-primary"  href="{{url('/master-data/print-reservasi/'. $reservation->id)}}">Cetak</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   


@stop
