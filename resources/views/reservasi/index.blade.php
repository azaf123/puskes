@extends('templatedinda.master')
@section('title', 'Data Reservation')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col">
            <!-- status  -->
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pendaftaran Pasien</h4>
                    <p class="card-description">
                        Data Pendaftaran Pasien
                    </p>
                     <a href="{{url('master-data/pasienbaru/create/')}}" type="button"
                    class="btn btn-inverse-primary btn-rounded btn-icon">Daftar Pasien Baru</a>
                  <a href="{{url('master-data/patient/create/')}}" type="button"
                    class="btn btn-inverse-primary btn-rounded btn-icon">Daftar Pasien Lama</a>

                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        No RM
                                    </th>
                                    <th>
                                        Nama Pasien
                                    </th>
                                    <th>
                                        Poli
                                    </th>
                                    <th>
                                        Ruangan
                                    </th>
                                    <th>
                                        No Antrean
                                    </th>
                                    <th>
                                        Keluhan
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservation as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->patient->no_rm}}</td>
                                    <td>{{ $item->patient->nama_pasien }}</td>
                                    <td>{{ $item->category->nama_kategori }}</td>
                                    <td>{{ $item->category->ruangan }}</td>
                                    <td>{{ $item->antrean->no_antrean}}</td>
                                    <td>{{ $item->keluhan}}</td>
                                    <td>
                                        <a href="{{url('/master-data/reservation/'.$item->id).'/edit'}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                <i class="ti-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{url('/master-data/reservation/' . $item->id)}}" enctype="multipart/form-data">
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