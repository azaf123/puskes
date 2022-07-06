@extends('templatedinda.header')
<style>
  .rowc{
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
  a{
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
  <h1>Identitas Pasien</h1>


  <form class="card">
    <div class="rowc p-3">
      <div class="column">
        <div class="form-group">
          <label for="form">No. RM</label>
          <h6>{{ $patient->no_rm }}</h6>
        </div>

        <div class="form-group">
          <label for="form">Nama Lengkap Pasien</label>
          <h5>{{ $patient->nama_pasien }}</h5>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">NIK</label>
          <h5>{{ $patient->nik }}</h5>
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Jenis Kelamin</label>
          <h5>{{ $patient->jenis_kelamin }}</h5>
        </div>
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <h5>{{ $patient->ttl }}</h5>
        </div>
        <div class="form-group">
          <label>Pendidikan</label>
          <h5>{{ $patient->pendidikan }}</h5>
        </div>
        <div class="form-group">
          <label>Pekerjaan</label>
          <h5>{{ $patient->pekerjaan }}</h5>
        </div>
        <div class="form-group">
          <label>Nama Ayah/Suami</label>
          <h5>{{ $patient->ayah_suami }}</h5>
        </div>

      </div>
      <div class="column">
        <div class="form-group">
          <label>Nama Ibu/Istri</label>
          <h5>{{ $patient->ibu_istri }}</h5>
        </div>
        <div class="form-group">
          <label>Suku Bangsa</label>
          <h5>{{ $patient->suku_bangsa }}</h5>
        </div>
        <div class="form-group">
          <label>Agama</label>
          <h5>{{ $patient->agama }}</h5>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <h5>{{ $patient->alamat }}</h5>
        </div>
        <div class="form-group">
          <label>No HP</label>
          <h5>{{ $patient->no_hp }}</h5>
        </div>
        <div class="form-group">
          <label>Golongan Darah</label>
          <h5>{{ $patient->goldar }}</h5>
        </div>
        <div class="form-group">
          <label>Bahasa</label>
          <h5>{{ $patient->bahasa }}</h5>
        </div>
        
      </div>
      
    </div>
    
  </form>
  <div class="button">
  <a id="printPageButton" class="btn btn-primary" href="{{url('/master-data/print-identitas/'. $patient->id . '/generate')}}">Cetak PDF</a>
  <a id="printPageButton" class="btn btn-primary" onclick="window.print()">Cetak window print</a>
  <a id="printPageButton" class="btn btn-secondary" href="{{url('/master-data/patient/'. $patient->id )}}">Kembali</a>
  </div>
 
</div>
