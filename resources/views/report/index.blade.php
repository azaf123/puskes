@extends('templatedinda.master')
@section('title', 'Data Dokter')

@section('content')
<div class="content-wrapper">
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Data Pengunjung</h3>
                <p class="text-subtitle text-muted">PT Pertamina Patra Niaga Regional Sumbagsel</p>

            </div>

        </div>
    </div>
</div>
<div id="main">

        <section class="section">
            <div class="card">
                <div class="card-header">
                    Laporan Data Reservasi per Tanggal
                </div>
                <div class="card-body">
              
                    <table class="table table-striped" id="table1">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="form-label" for="">Tanggal Awal</label>
                                <div class="position-relative">
                                    <input class="form-control" type="date" name="tglawal" id="tglawal">
                                    <b>
                                        <p style="font-size: 15px;">*jangan lupa masukkan tanggal</p>
                                    </b>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label" for="">Tanggal Akhir</label>
                                <div class="position-relative">
                                    <input class="form-control" type="date" name="tglakhir" id="tglakhir">
                                    <b>
                                        <p style="font-size: 15px;">*jangan lupa masukkan tanggal</p>
                                    </b>
                                    <br>
                                    <br>
                                   
                                </div>
                            </div>
                        </div>
                       
                        <br>
                        <a href="" class="btn btn-primary" onclick="this.href='cetakpertanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value">Submit</a>

                    </table>
                </div>
            </div>

        </section>
    </div>


</div>

</div>
@stop