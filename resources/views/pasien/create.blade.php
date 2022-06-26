@extends('templatedinda.master')
@section('title', 'Pasien')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Pasien Lama</h4>
                    <p class="card-description">
                        Isi Data Form!
                    </p>
                    <form action="{{url('/master-data/patient')}}" method="POST" class="forms-sample">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputName1">No Berobat</label>
                                    <input list="answers" class="form-control @error('noberobat') is-invalid @enderror" id="answer">
                    <datalist id="answers">
                        @foreach ($patient as $item)
                        <option data-value="{{$item->no_rm}}">{{$item->no_rm}}</option>
                        @endforeach
                    </datalist>
                    <input type="hidden" name="noberobat" id="answer-hidden">
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
                                    <!-- <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Lengkap">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror -->
                                    <select name="nama" class="form-control" id="nama">
                                       
                                    </select>
                                </div>
                            </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Jenis Kelamin</label>
                                        <select class="form-control" name="jeniskelamin" id="jeniskelamin">
                                          
                                        </select>

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Tanggal Lahir</label>
                                        <select class="form-control" name="ttl" id="ttl">
                                          
                                          </select>
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
$('input[list]').on('input', function(e) {
    var $input = $(e.target),
        $options = $('#' + $input.attr('list') + ' option'),
        $hiddenInput = $('#' + $input.attr('id') + '-hidden'),
        label = $input.val();

    $hiddenInput.val(label);

    for(var i = 0; i < $options.length; i++) {
        var $option = $options.eq(i);

        if($option.text() === label) {
            $hiddenInput.val( $option.attr('data-value') );
            break;
        }
    }
    // ajax
    var id = $('#answer-hidden').val(); // mendapatkan nilai value
    var url = '{{url('/pasien-treatment/')}}' + '/' + id;
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            if (res) {
                $.each(res, function(key, value) {
                    console.log(res);
                    $('#nama').empty();
                    $('#nama').append($("<option/>", {
                        value: value['id'],
                        text: value['nama_pasien']
                    }));
                    $('#jeniskelamin').empty();
                    $('#jeniskelamin').append($("<option/>", {
                        value: value['id'],
                        text: value['jenis_kelamin']
                    }));
                    $('#ttl').empty();
                    $('#ttl').append($("<option/>", {
                        value: value['id'],
                        text: value['ttl']
                    }));
                    
                    
                });
               
            }
        }
    });

});

</script>

@stop

<!-- <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputName1">NIK</label>
                                        <input id="nik" name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="exampleInputName1" placeholder="NIK">
                                        @error('nik')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div> -->


                            <!-- <div class="row">
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
                                        <input id="pekerjaan" name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="exampleInputName1" placeholder="Pekerjaan">
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
                                        <input id="nama_as" name="nama_as" type="text" class="form-control @error('nama_as') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Ayah/Suami">
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
                                        <input id="nama_ii" name="nama_ii" type="text" class="form-control @error('nama_ii') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Ibu/Istri">
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
                                        <input id="sukubangsa" name="sukubangsa" type="text" class="form-control @error('sukubangsa') is-invalid @enderror" id="exampleInputName1" placeholder="Suku bangsa">
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
                                        <textarea id="alamat" name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName1" placeholder="Masukkan alamat"></textarea>
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
                                        <input id="nohp" name="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" id="exampleInputName1" placeholder="Isi Pasien-nomor">
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
                                        <select id="goldar" class="form-control" name="goldar" id="">
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
                                        <input id="bahasa" name="bahasa" type="text" class="form-control @error('bahasa') is-invalid @enderror" id="exampleInputName1" placeholder="Bahasa">
                                        @error('bahasa')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div> -->
