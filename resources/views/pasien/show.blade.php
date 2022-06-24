@extends('templatedinda.master')
@section('title', 'Nomor Antrian')

@section('content')
<div class="content-wrapper" style="width:50% ;" >
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Identitas Pasien</h4>
                    <p class="card-description">
                        Tambah Identitas Pasien
                    </p>
                    <a href="{{url('master-data/pasien/create')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon">Tambah Identitas Pasien</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">

                            <thead>
                                <tr>
                                 
                                    <th>No Berobat</th>
                                    <th>Nama Pasien</th>
                                    <th>NIK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>TTL</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Ibu Istri</th>
                                    <th>Ayah Suami</th>
                                    <th>Suku Bangsa</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Goldar</th>
                                    <th>Bahasa</th>
                                    <!-- <th>Keluhan</th> -->
                                  
                                   
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                 
                                    <td>{{ $patient->treatment_id}}</td>
                                    <td>{{ $patient->nama_pasien }}</td>
                                    <td>{{ $patient->nik }}</td>
                                    <td>{{ $patient->jenis_kelamin }}</td>
                                    <td>{{ $patient->ttl }}</td>
                                    <td>{{ $patient->pendidikan }}</td>
                                    <td>{{ $patient->pekerjaan }}</td>
                                    <td>{{ $patient->ibu_istri }}</td>
                                    <td>{{ $patient->ayah_suami }}</td>
                                    <td>{{ $patient->suku_bangsa }}</td>
                                    <td>{{ $patient->agama }}</td>
                                    <td>{{ (strlen($patient->alamat)>10) ? substr($patient -> alamat, 0,20) . '...': $patient->alamat }}</td>
                                    <td>{{ $patient->no_hp }}</td>
                                    <td>{{ $patient->goldar }}</td>
                                    <td>{{ $patient->bahasa }}</td>
                                
                            
                                   
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@stop