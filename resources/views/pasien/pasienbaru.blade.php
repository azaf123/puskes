@extends('templatedinda.master')
@section('title', 'Nomor Antrian')

@section('content')
<div class="content-wrapper" style="width:50% ;">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Identitas Pasien Baru</h4>
                    <p class="card-description">
                        Data Identitas Pasien Baru. Harap Tambahkan No.RM!
                    </p>
                    <a href="{{url('master-data/pasien/create')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon md-3">Tambah Identitas Pasien</a>
                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="table1">

                            <thead>
                                <tr>
                                    <th>No</th>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patient as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->treatment->no_berobat}}</td>
                                    <td>{{ $item->nama_pasien }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->ttl }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td>{{ $item->pekerjaan }}</td>
                                    <td>{{ $item->ibu_istri }}</td>
                                    <td>{{ $item->ayah_suami }}</td>
                                    <td>{{ $item->suku_bangsa }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ (strlen($item->alamat)>10) ? substr($item -> alamat, 0,20) . '...': $item->alamat }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->goldar }}</td>
                                    <td>{{ $item->bahasa }}</td>
                                    <!-- <td>{{ $item->keluhan }}</td> -->
                                    
                                    <td>
                                        <a href="{{url('/master-data/pasien/'.$item->id).'/edit'}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                <i class="ti-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{url('/master-data/pasienbaru/' . $item->id)}}" enctype="multipart/form-data"
                                            class='d-inline'>
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-social-icon btn-inverse-danger btn-rounded">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@stop