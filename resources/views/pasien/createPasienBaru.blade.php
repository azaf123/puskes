@extends('templatedinda.master')
@section('title', 'Pasien')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Pasien Baru</h4>
                    <p class="card-description">
                        Isi Data Form!
                    </p>
                    <form action="{{url('/master-data/pasienbaru')}}" method="POST" class="forms-sample">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputName1">No Berobat</label>

                                    <input readonly list="datalistOptions" type="text" class="form-control @error('noberobat') is-invalid @enderror" placeholder="DIKOSONGKAN" id="noberobat" name="noberobat">
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectGender">Nama Lengkap Pasien</label>
                                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Lengkap">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">NIK</label>
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="exampleInputName1" placeholder="NIK">
                                        @error('nik')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Jenis Kelamin</label>
                                        <select class="form-control" name="jeniskelamin" id="">
                                            <option value="laki-laki">Laki Laki</option>
                                            <option value="perempuan"> Perempuan</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Tanggal Lahir</label>
                                        <input name="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Pasien-nomor">
                                        @error('ttl')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Pendidikan</label>
                                        <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                                            <option>SD</option>
                                            <option>SMP</option>
                                            <option>SMA</option>
                                            <option>S1</option>
                                            <option>S2</option>
                                            <option>S3</option>
                                            <option>-</option>
                                        </select>
                                        @error('pendidikan')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Pekerjaan</label>
                                        <input name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="exampleInputName1" placeholder="Pekerjaan">
                                        @error('pekerjaan')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Ayah/Suami</label>
                                        <input name="nama_as" type="text" class="form-control @error('nama_as') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Ayah/Suami">
                                        @error('nama_as')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Ibu/Istri</label>
                                        <input name="nama_ii" type="text" class="form-control @error('nama_ii') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Ibu/Istri">
                                        @error('nama_ii')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Suku Bangsa</label>
                                        <input name="sukubangsa" type="text" class="form-control @error('sukubangsa') is-invalid @enderror" id="exampleInputName1" placeholder="Suku bangsa">
                                        @error('sukubangsa')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Agama</label>
                                        <select class="form-control" name="agama" id="">
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Alamat</label>
                                        <textarea name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName1" placeholder="Masukkan alamat"></textarea>
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">No HP</label>
                                        <input name="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Pasien-nomor">
                                        @error('nohp')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Golongan Darah</label>
                                        <select class="form-control" name="goldar" id="">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Bahasa</label>
                                        <input name="bahasa" type="text" class="form-control @error('bahasa') is-invalid @enderror" id="exampleInputName1" placeholder="Bahasa">
                                        @error('bahasa')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <button class="btn btn-light">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop