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
                    <h4 class="card-title">Data Reservation</h4>
                    <p class="card-description">
                        Data Reservation
                    </p>
                    <!-- <a href="{{url('master-data/reservation/create')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon">Tambah Nomor
                        Reservasi</a> -->

                    <div class="table-responsive">
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
                                        No Antrean
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
                                    <td>{{ $item->treatment->no_berobat}}</td>
                                    <td>{{ $item->patient->nama_pasien }}</td>
                                    <td>{{ $item->category->nama_kategori }}</td>
                                    <td>{{ $item->antrean->no_antrean}}</td>
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