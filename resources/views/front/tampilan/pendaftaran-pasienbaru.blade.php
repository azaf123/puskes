@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')
<div class="row">
    <div class="col">
        <!-- status  -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        </button>
    </div>
</div>
    <section class="order" id="order">
       
        <div class="heading">
            <h3>Pendaftaran Identitas Pasien Baru</h3>
            <span>Puskesmas 5 Ilir Palembang</span>
        </div>


        <form action="{{ url('/pendaftaran-pasien-baru') }}" method="POST">
            @csrf
            <div class="box-container">
                <div class="box">
                    <div class="inputBox">
                        <span><b>No RM</b></span>
                        <input readonly list="datalistOptions" type="text"
                            class="form-control @error('noberobat') is-invalid @enderror" placeholder="DIKOSONGKAN"
                            id="noberobat">
                        <datalist id="datalistOptions">
                            @foreach ($treatment as $item)
                                <option data-value="{{ $item->id }}">{{ $item->no_berobat }}</option>
                            @endforeach

                        </datalist>
                        @error('noberobat')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox form-control">
                        <span><b> Nama Lengkap Pasien</b></span>
                        <input class="@error('nama') is-invalid @enderror" name="nama" type="text" placeholder="Masukkan nama lengkap">
                        @error('nama')
                            <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <span><b>Nomor KTP</b> </span>
                        <input class="@error('nik') is-invalid @enderror" name="nik" type="number" placeholder="Masukkan Nomor KTP yang belum terdaftar">
                        @error('nik')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>

                    <div class="inputBox">
                        <span><b>Jenis Kelamin</b> </span>
                        <select class="@error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" class="form-control" id="exampleFormControlSelect1" >
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span><b> No HP</b></span>
                        <input class="@error('nohp') is-invalid @enderror" name="nohp" type="number" placeholder="Masukkan No HP">
                        @error('nohp')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <span>
                            <b> Tempat Lahir</b></span>
                        <input class="@error('tempatlahirr') is-invalid @enderror" name="tempatlahirr" type="text" placeholder="Masukkan Tempat Lahir ">
                        @error('tempatlahir')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <span>
                            <b> Tanggal Lahir</b></span>
                        <input class="@error('ttl') is-invalid @enderror" name="ttl" type="date">
                        @error('ttl')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <span><b>Golongan Darah</b> </span>
                        <select class="@error('goldar') is-invalid @enderror" name="goldar" class="form-control" id="exampleFormControlSelect1">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    
                    <div class="inputBox">
                        <span><b> Pekerjaan</b></span>
                        <input class="@error('pekerjaan') is-invalid @enderror" name="pekerjaan" type="text" placeholder="Masukkan Pekerjaan">
                        @error('pekerjaan')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    
                    <div class="inputBox">
                        <span><b>Pendidikan</b> </span>
                        <select class="@error('pendidikan') is-invalid @enderror" name="pendidikan" class="form-control" id="exampleFormControlSelect1">
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
                   
                </div>

                <div class="box">
                    <div class="inputBox">
                        <span><b>Agama</b> </span>
                        <select class="@error('agama') is-invalid @enderror" name="agama" class="form-control" id="exampleFormControlSelect1">
                            <option value="islam">Islam</option>
                            <option value="protestan">Protestan</option>
                            <option value="katolik">Katolik</option>
                            <option value="buddha">Buddha</option>
                            <option value="hindu">Hindu</option>
                            <option value="khonghucu">Khonghucu</option>

                        </select>
                    </div>
                    

                    <div class="inputBox">
                        <span><b>Nama Ibu/Istri</b></span>
                        <input class="@error('nama_ii') is-invalid @enderror" name="nama_ii" type="text" placeholder="Masukkan Nama Ibu/Istri">
                        @error('nama_ii')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <span><b>Nama Ayah/Suami</b></span>
                        <input class="@error('nama_as') is-invalid @enderror" name="nama_as" type="text" placeholder="Nama Ayah/Suami">
                        @error('nama_as')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <span><b>Bahasa</b></span>
                        <input class="@error('bahas') is-invalid @enderror" name="bahasa" type="text" placeholder="Masukkan Bahasa">
                        @error('bahasa')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    
                    
                    <div class="inputBox">
                        <span><b> Suku Bangsa</b></span>
                        <input class="@error('sukubangsa') is-invalid @enderror" name="sukubangsa" type="text" placeholder="Masukkan  Suku Bangsa">
                        @error('sukubangsa')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
                    </div>
                    <div class="inputBox">
                        <span><b> Alamat Rumah</b></span>
                        <textarea class="@error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat Rumah" id="" cols="30" rows="10"></textarea>
                        @error('alamat')
   <div class="invalid-feedback">
                              <h5 style="font-size: 15px; color:red;">
                              {{ $message }}
                              </h5>  
                              <br>
                            </div>
                        @enderror
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
            <input  type="submit" value="Simpan" class="btn">
        </form>

    </section>


@stop
