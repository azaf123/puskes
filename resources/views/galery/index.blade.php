@extends('templatedinda.master')
@section('title', 'galery')

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
                    <h4 class="card-title">Data Galeri</h4>
                    <a href="{{url('master-data/galery/create')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon">Tambah
                        Galeri</a>
                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                   
                                    <th>
                                        Foto
                                    </th>
                                   
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galery as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{asset('img/'.$item->gambar)}}" alt=""></td>
                                 <td>
                                    <a href="{{ url('/master-data/galery/' . $item->id) }}">
                                        <button type="submit"
                                            class="btn btn-social-icon btn-inverse-info btn-rounded">
                                            <i class="ti-eye" role="button"></i>
                                        </button>
                                    </a>
                                        <a href="{{url('/master-data/galery/'.$item->id).'/edit'}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                <i class="ti-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{url('/master-data/galery/' . $item->id)}}" enctype="multipart/form-data"
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