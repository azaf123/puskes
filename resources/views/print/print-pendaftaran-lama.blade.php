@extends('templatedinda.header')
<div class="container">
    <h1>Pendaftaran</h1>
    <br>
    <br>
    
<table class="table">
  <thead>
  
    <tr>
     
      <th scope="col">Nama Pasien</th>
      <th scope="col">Poli</th>
      <th scope="col">No Antrean</th>
    
    </tr>
  </thead>

  <tbody>
  

     
      <td>{{ $getdata->patient->nama_pasien}}</td>
      <td>{{ $getdata->category->nama_kategori}}</td>
      <td>{{ $getdata->antrean->no_antrean}}</td>

    </tr>


  </tbody>
</table>
</div>
