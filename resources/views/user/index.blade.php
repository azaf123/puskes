@extends('templatedinda.master')
@section('title', 'Data Poli')

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
                    <h4 class="card-title">Data User</h4>
                    <a href="{{url('master-data/register')}}" type="button" class="btn btn-inverse-primary btn-rounded btn-icon">Tambah User
                        </a>

                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Bagian
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->bagian }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <form method="POST" action="{{url('/master-data/user/' . $item->id)}}" enctype="multipart/form-data"
                                            class='d-inline'>
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-social-icon btn-inverse-danger btn-rounded">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{url('/master-data/user/'.$item->id).'/edit'}}">
                                            <button type="button" class="btn btn-social-icon btn-inverse-success btn-rounded">
                                                <i class="ti-pencil-alt"></i>
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