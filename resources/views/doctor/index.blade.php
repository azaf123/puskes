@extends('templatedinda.master')
@section('title', 'Data Dokter')

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
                    <h4 class="card-title">Data Dokter</h4>
                    <p class="card-description">
                        Data Dokter
                    </p>
                    <a href="{{url('master-data/doctor/create')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon">Tambah
                        Dokter</a>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>
                                        Nama Dokter
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Alamat
                                    </th>
                                    <th>
                                        Spesialisasi
                                    </th>
                                    <th>
                                        No HP
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctor as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{asset('img/'.$item->foto)}}" alt=""></td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->spesialisasi }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>
                                        <a href="{{url('/master-data/doctor/'.$item->id).'/edit'}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                <i class="ti-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{url('/master-data/doctor/' . $item->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-social-icon btn-inverse-danger btn-rounded">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{url('/master-data/doctor/'.$item->id)}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                Show
                                            </button>
                                        </a>

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