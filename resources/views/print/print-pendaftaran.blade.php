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
  @foreach ($reservation as $item)
    <tr>

      <td>{{ $item->treatment->no_berobat}}</td>
      <td>{{ $item->treatment->nama_pasien}}</td>
      <td>{{ $item->treatment->poli}}</td>
      <td>{{ $item->treatment->no_antrean}}</td>

    </tr>
  @endforeach

  </tbody>
</table>
</div>
