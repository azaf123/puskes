@extends('templatedinda.master')
@section('title', 'Data Laporan')

@section('content')
<style>
    @media print {
        #printPageButton {
            display: none;
        }
    }
</style>
<div class="content-wrapper">

<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Data Reservasi</h3>
              

            </div>

        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="card">
            <div class="card-body">

                <table class="table table-striped" id="table2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No RM</th>
                            <th>Nama Pasien</th>
                            <th>Poli</th>
                            <th>No Antrean</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tglpengunjung as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->treatment->no_berobat}}</td>
                            <td>{{ $item->patient->nama_pasien}}</td>
                            <td>{{ $item->category->nama_kategori }}</td>
                            <td>{{ $item->antrean->no_antrean }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-10">
                <a href="{{url('master-data/laporan/cetakformpertanggal')}}" id="printPageButton" onclick="" class="btn btn-secondary" role="button">
                    Kembali
                </a>
            </div>
            <div class="col-lg-2">
                <a href="{{url('master-data/cetak-data/laporan/')}}" id="printPageButton"  class="btn btn-primary" role="button">
                    <span class="fa-fw select-all fas"></span>
                    Cetak Data Laporan
                </a>

            </div>
        </div>

    </div>

</section>

</div>
@stop