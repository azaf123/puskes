@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')
<section class="order" id="order">

<div class="heading">
    <span>KAJIAN AWAL</span>
    <h3>RAWAT JALAN</h3>
</div>


<form action="{{url('/pendaftaran-pasien-baru')}}" method="POST">
    @csrf
    <div class="box-container">
        <div class="box">
        <div class="inputBox">
                    <span><b>No RM</b></span>
                    <input hidden type="text" name="noberobat" value="3">
                    <input readonly list="datalistOptions" type="text" class="form-control @error('noberobat') is-invalid @enderror" placeholder="DIKOSONGKAN" id="noberobat">
                    <datalist id="datalistOptions">
                        @foreach ($treatment as $item)
                        <option data-value="{{$item->id}}">{{$item->no_berobat}}</option>
                        @endforeach

                    </datalist>
                    @error('noberobat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
            <div class="inputBox">
                <span><b> Nama Lengkap Pasien</b></span>
                <input name="nama" type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span><b>Nomor KTP</b> </span>
                <input name="nik" type="text" placeholder="enter your number">
            </div>
            
            <div class="inputBox">
                <span><b>Jenis Kelamin</b> </span>
                <select name="jeniskelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="inputBox">
                <span><b> Suku Bangsa</b></span>
                <input name="sukubangsa" type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span><b> Pekerjaan</b></span>
                <input name="pekerjaan" type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span><b> No HP</b></span>
                <input name="nohp" type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span>
                    <b> Tanggal Lahir</b></span>
                <input name="ttl" type="date">
            </div>
            <div class="inputBox">
                <span><b>Agama</b> </span>
                <select name="agama" class="form-control" id="exampleFormControlSelect1">
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="inputBox">
                <span><b> your address</b></span>
                <textarea name="alamat" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="box">
            <div class="inputBox">
                <span><b>Golongan Darah</b> </span>
                <select name="goldar" class="form-control" id="exampleFormControlSelect1" placeholder="enter your name">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>

               
                </select>
            </div>
            <div class="inputBox">
                <span><b>Pendidikan</b> </span>
                <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    
                </select>
            </div>
            
            <div class="inputBox">
                <span><b>Nama Ibu/Istri</b></span>
                <input name="nama_ii" type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span><b>Nama Ayah/Suami</b></span>
                <input name="nama_as" type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span><b>Bahasa</b></span>
                <input name="bahasa" type="text" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span> 
                    <b>Alamat Puskesmas 5 Ilir</b> </span>
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.476930317359!2d104.77051201475687!3d-2.965081797840509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7667b598cd7d%3A0x4375924fa65338dc!2sPuskesmas%205%20Ilir!5e0!3m2!1sid!2sid!4v1655156301302!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <input type="submit" value="Simpan" class="btn">
</form>

</section>


@stop