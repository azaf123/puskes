@extends('templatedinda.master')
@section('title', 'Pasien')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Pasien</h4>
                    <p class="card-description">
                        Isi Data Form!
                    </p>
                    <form action="{{url('/master-data/patient/'. $patient->id)}}" method="POST" class="forms-sample">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputName1">No RM</label>

                                    <select name="noberobat" class="form-control" id="noberobat">
                                        @foreach($treatment as $item)
                                        <option value="{{$item->id}}">{{$item->no_berobat}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectGender">Nama Lengkap Pasien</label>
                                    <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Lengkap" value="{{$patient->nama_pasien}}">
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
                                        <input id="nik" name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="exampleInputName1" 
                                        placeholder="NIK" value="{{$patient->nik}}">
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
                                        <select class="form-control" name="jeniskelamin" id="" value>
                                            <option value="{{$patient->jenis_kelamin}}">{{$patient->jenis_kelamin}}</option>
                            
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Tanggal Lahir</label>
                                        <input id="ttl" name="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Pasien-nomor" value="{{$patient->ttl}}">
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
                                        <input id="pendidikan" name="pendidikan" type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="exampleInputName1" placeholder="Pendidikan" value="{{$patient->pendidikan}}">
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
                                        <input id="pekerjaan" name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="exampleInputName1" placeholder="Pekerjaan" value="{{$patient->pekerjaan}}">
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
                                        <input id="nama_as" name="nama_as" type="text" class="form-control @error('nama_as') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Ayah/Suami" value="{{$patient->ayah_suami}}">
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
                                        <input id="nama_ii" name="nama_ii" type="text" class="form-control @error('nama_ii') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Ibu/Istri" value="{{$patient->ibu_istri}}">
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
                                        <input id="sukubangsa" name="sukubangsa" type="text" class="form-control @error('sukubangsa') is-invalid @enderror" id="exampleInputName1" placeholder="Suku bangsa" value="{{$patient->suku_bangsa}}">
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
                                        <textarea id="alamat" name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName1" placeholder="Masukkan alamat" >{{$patient->alamat}}</textarea>
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
                                        <input id="nohp" name="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Pasien-nomor" value="{{$patient->no_hp}}">
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
                                        <select id="goldar" class="form-control" name="goldar" id="" value="{{$patient->goldar}}">
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
                                        <input id="bahasa" name="bahasa" type="text" class="form-control @error('bahasa') is-invalid @enderror" id="exampleInputName1" placeholder="Bahasa" value="{{$patient->bahasa}}">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('#noberobat').on('change', function() {
        var id = $(this).val(); // mendapatkan nilai value
        var url = '{{url(' / treatment / ')}}' + '/' + id;
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                console.log(res);
                if (res) {
                    $.each(res, function(key, value) {
                        $('#nama').val(value['nama_pasien']);
                        $('#nik').val(value['nik']);
                        $('#jeniskelamin').val(value['jenis_kelamin']);
                        $('#ttl').val(value['ttl']);
                        $('#alamat').val(value['alamat']);
                        $('#nohp').val(value['no_hp']);
                        $('#pendidikan').val(value['pendidikan']);
                        $('#pekerjaan').val(value['pekerjaan']);
                        $('#nama_as').val(value['ayah_suami']);
                        $('#nama_ii').val(value['ibu_istri']);
                        $('#sukubangsa').val(value['suku_bangsa']);
                        $('#agama').val(value['agama']);
                        $('#goldar').val(value['goldar']);
                        $('#bahasa').val(value['bahasa']);
                        $('#keluhan').val(value['keluhan']);
                        $('#poli').val(value['category_id']);
                        $('#antrean').val(value['antrean_id']);
                    });

                }
            }
        });
    });
</script>

@stop