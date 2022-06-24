@extends('templatedinda.master')
@section('title', 'Nomor Antrian')


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
                    <h4 class="card-title">Nomor Antrian Pasien</h4>
                    <p class="card-description">
                        Data Nomor Antrian
                    </p>
                    <a href="{{url('master-data/antrean/create')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon">Tambah Nomor
                        Antrian</a>

                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Poliklinik
                                    </th>
                                    <th>
                                        Nomor Antrian
                                    </th>
                                    <th>
                                        status
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($antrean as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->category->nama_kategori }}</td>
                                    <td>{{ $item->no_antrean }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{url('/master-data/antrean/'.$item->id).'/edit'}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                <i class="ti-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{url('/master-data/antrean/' . $item->id)}}" enctype="multipart/form-data"
                                            class="d-inline">
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