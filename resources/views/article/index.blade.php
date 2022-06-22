@extends('templatedinda.master')
@section('title', 'Data Artikel')

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

                    <h4 class="card-title">Artikel</h4>
                    <p class="card-description">
                        Data Artikel
                    </p>
                    <a href="{{url('master-data/article/create')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon">Tambah
                        Artikel</a>
                    <div class="table-responsive">

                        <table id="order-listing" class="table table-striped">

                            <thead>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Judul
                                    </th>
                                    <th>
                                        Deskripsi
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($article as $item)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{asset('img/'.$item->gambar)}}" alt=""></td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ (strlen($item->konten)>10) ? substr($item -> konten, 0,20) . '...': $item->konten }}</td>
                                    <td>
                                    <a href="{{url('/master-data/article/'.$item->id).'/edit'}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                <i class="ti-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{url('/master-data/article/' . $item->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-social-icon btn-inverse-danger btn-rounded">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{url('/master-data/article/'.$item->id)}}">
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