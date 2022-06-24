@extends('templatedinda.master')
@section('title', 'Nomor Antrian')

@section('content')
    @extends('templatedinda.master')
@section('title', 'Pasien')

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
                                <h6>{{ $patient->nama_pasien }}</h6>
                            </div>

                            <div class="form-group">
                                <label for="form">Nama Lengkap Pasien</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">NIK</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Jenis Kelamin</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Nama Ayah/Suami</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu/Istri</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Suku Bangsa</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <h5>{{ $patient->nama_pasien }}</h5>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@stop
