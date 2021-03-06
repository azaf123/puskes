
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<style>
    body {
        background: #eee;
        margin-top: 20px;
    }

    .text-danger strong {
        color: #9f181c;
    }

    .receipt-main {
        background: #ffffff none repeat scroll 0 0;
        border-bottom: 12px solid #333333;
        border-top: 12px solid #9f181c;
        margin-bottom: 50px;
        width: 600px;
        padding: 20px 10px !important;
        position: relative;
        box-shadow: 0 1px 21px #acacac;
        color: #333333;
        font-family: open sans;
    }

    .receipt-main p {
        color: #333333;
        font-family: open sans;
        line-height: 1.42857;
    }

    .receipt-footer h1 {
        font-size: 15px;
        font-weight: 400 !important;
        margin: 0 !important;
    }

    .receipt-main::after {
        background: #414143 none repeat scroll 0 0;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: -13px;
    }

    .receipt-main thead {
        background: #ffffff none repeat scroll 0 0;
    }

    .receipt-main thead th {
        color: #000000;
    }

    .receipt-right h5 {
        font-size: 16px;
        font-weight: bold;
        margin: 0 0 7px 0;
    }

    .receipt-right p {
        font-size: 12px;
        margin: 0px;
    }

    .receipt-right p i {
        text-align: center;
        width: 18px;
    }

    .receipt-main td {
        padding: 9px 20px !important;
    }

    .receipt-main th {
        padding: 13px 20px !important;
    }

    .receipt-main td {
        font-size: 13px;
        font-weight: initial !important;
    }

    .receipt-main td p:last-child {
        margin: 0;
        padding: 0;
    }

    .receipt-main td h2 {
        font-size: 20px;
        font-weight: 900;
        margin: 0;
        text-transform: uppercase;
    }

    .receipt-header-mid .receipt-left h1 {
        font-weight: 100;
        margin: 34px 0 0;
        text-align: right;
        text-transform: uppercase;
    }

    .receipt-header-mid {
        margin: 24px 0;
        overflow: hidden;
    }


  
</style>

<div class="container">
    <div class="bungkus">
        <div class="col-lg-12">
            <div class="row">
                <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                    <div class="row">
                        <div class="receipt-header">
                            <div class="col">
                                <div class="receipt-left">
                                    <img class="img-responsive" alt="iamgurdeeposahan"
                                        src="{{ asset('dinda/logo.png') }}"
                                        style="width: 150px; border-radius: 43px;">
                                    
									<br>
                                    <p>Jalan Jendral Jl. Bambang Utoyo No.1095, 5 Ilir, Kec. Ilir Tim. II, Kota
                                        Palembang, Sumatera Selatan 30111</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="receipt-left">
                                <h6>No Antrian</h6>
                                <h6>{{ $getdata->antrean->no_antrean }}</h6>
                                <br>
                                <h6>Tanggal Berobat</h6>
                                <h6>{{
                                    substr($getdata->created_at, 0,10)}}</h6>
                            </div>
                        </div>

                        <div class="col">
                            <div class="receipt-right">
                                <br>
                                
                                <h5>{{ $getdata->patient->nama_pasien }}</h5>
                                <p><b>Jenis Kelamin :</b> {{ $getdata->patient->jenis_kelamin }}</p>
                                <p><b>Tanggal Lahir :</b> {{ $getdata->patient->ttl }}</p>
                                <p><b>No HP :</b> {{ $getdata->patient->no_hp }}</p>
                                <p><b>Tanggal Berobat : </b> {{
                                   substr($getdata->created_at, 0,10)}}</p>
                                </p>
                            </div>
                        </div>


                    </div>
                    <br>
                    <br>
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-7">Poli</td>
                                    <td class="col-md-3"><i
                                            class="fa fa-inr"></i><b>{{ $getdata->category->nama_kategori }} </b> </td>
                                </tr>
                                <tr>
                                    <td class="col-md-7">Ruangan</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i><b> {{ $getdata->category->ruangan }}</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-7">Keluhan</td>
                                    <td class="col-md-10"><i class="fa fa-inr"></i><b> {{ $getdata->keluhan }} </b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print()
    </script>
</div>
