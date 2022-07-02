@extends('templatedinda.header')
<div class="container">
    <h1>Identitas</h1>
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
    <tr>

      <td>{{$patient->nama_pasien}}</td>
      
    </tr>


  </tbody>
</table>
</div>
<button onclick="windows.print()">
Cetak
</button>

