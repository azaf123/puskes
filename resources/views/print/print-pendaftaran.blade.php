@extends('templatedinda.header')
<div class="container">
    <h1>Pendaftaran</h1>
    <br>
    <br>
<table class="table">
  <thead>
  
    <tr>
      <th scope="col">No RM</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Poli</th>
      <th scope="col">No Antrean</th>
    
    </tr>
  </thead>
  <tbody>

    <tr>
     
        <td>{{ $reservation->treatment->no_berobat}}</td>
        <td>{{ $reservation->patient->nama_pasien }}</td>
        <td>{{ $reservation->category->nama_kategori }}</td>
        <td>{{ $reservation->antrean->no_antrean}}</td>
      
    </tr>

  </tbody>
</table>
</div>
