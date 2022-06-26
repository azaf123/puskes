@extends('templatedinda.master')
@section('title', 'Nomor Antrian')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Identitas Pasien</h4>
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
                                <label for="exampleInputPassword4">NIK</label>
                                <h5>{{ $patient->nik }}</h5>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Jenis Kelamin</label>
                                <h5>{{ $patient->jenis_kelamin }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <h5>{{ $patient->ttl }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <h5>{{ $patient->pendidikan }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <h5>{{ $patient->pekerjaan }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Nama Ayah/Suami</label>
                                <h5>{{ $patient->ayah_suami }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu/Istri</label>
                                <h5>{{ $patient->ibu_istri }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Suku Bangsa</label>
                                <h5>{{ $patient->suku_bangsa }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <h5>{{ $patient->agama }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <h5>{{ $patient->alamat }}</h5>
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <h5>{{ $patient->no_hp }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Golongan Darah</label>
                                <h5>{{ $patient->goldar }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Bahasa</label>
                                <h5>{{ $patient->bahasa }}</h5>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   


@stop
