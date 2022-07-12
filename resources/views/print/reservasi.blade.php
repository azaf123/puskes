@extends('templatedinda.header')
<style>
    .rowc {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    a {
        width: 30%;
    }

    @media print {
        #printPageButton {
            display: none;
        }
    }
    .button{
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;

        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        
    

    }
</style>
<div class="container">
    <br>
    <h1>Reservasi Pasien</h1>


    <form class="card">
        <div class="rowc p-3">
            <div class="form-group">
                <label for="form">No. RM</label>
                <h6>{{ $reservation->patient->no_rm }}</h6>
            </div>

            <div class="form-group">
                <label for="form">Nama Lengkap Pasien</label>
                <h5>{{ $reservation->patient->nama_pasien }}</h5>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">Poli</label>
                <h5>{{ $reservation->category->nama_kategori}}</h5>
            </div>
            <div class="form-group">
                <label>Ruangan</label>
                <h5>{{ $reservation->category->ruangan }}</h5>
            </div>
            <div class="form-group">
                <label>No Antrean</label>
                <h5>{{ $reservation->antrean->no_antrean }}</h5>
            </div>
            <div class="form-group">
                <label>Keluhan</label>
                <h5>{{ $reservation->keluhan }}</h5>
            </div>          
        </div>
    </form>
    <div class="button">
            <a id="printPageButton" class="btn btn-primary" href="{{url('/master-data/print-reservasi/'. $reservation->id . '/generate')}}">Cetak PDF</a>
            <a id="printPageButton" class="btn btn-primary" onclick="window.print()">Cetak window print</a>
            <a id="printPageButton" class="btn btn-secondary" href="{{url('/master-data/reservation/'. $reservation->id )}}">Kembali</a>
            </div>
</div>