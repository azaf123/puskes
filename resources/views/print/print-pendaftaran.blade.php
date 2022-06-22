@extends('templatedinda.header')
<div class="container">
    <h1>PUSKESMAS</h1>
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
      <th scope="row">{{$}}</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
