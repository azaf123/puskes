@extends('templatedinda.master')
@section('title', 'Reservasi')

@section('content')
<div class="content-wrapper">
    <div class="row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Reservasi</h4>
                    <p class="card-description">
                        Isi Reservasi
                    </p>
                    <form action="{{ url('/master-data/reservation/'.$reservation->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                        <label for="">No RM</label>
                        <input type="text" class="form-control" name="noberobat" value="{{
                            $reservation->id
                       }}" hidden>
                    </input>
                    <input type="text" class="form-control" value="{{$reservation->patient->no_rm }}" readonly>
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleSelectGender">Nama Pasien</label>
                         
                            <input type="text" class="form-control" name="nama" value="{{
                        $reservation->patient_id
                       }}" hidden>
                       <input type="text" class="form-control" value="{{
                        $reservation->patient->nama_pasien
                       }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Poli</label>
                            <select name="poli" class="form-control" id="poli">
                                @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Antrean</label>
                            <select name="antrean" class="form-control" id="antrean">

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Keluhan</label>
                            <input name="keluhan" class="form-control" id="keluhan" value="{{$reservation->keluhan}}">

                            </input>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <button class="btn btn-light">Batal</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    $('#poli').on('change', function() {
        var id = $(this).val(); // mendapatkan nilai value
        var url = '{{url('/antrean/')}}' + '/' + id;

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                $('#antrean').empty();
                $('#antrean').append('<option>Pilih Antrean</option>');
                if (res) {
                    $.each(res, function(key, value) {
                        console.log(res);
                        $('#antrean').append($("<option/>", {
                            value: value['id'],
                            text: value['no_antrean']
                        }));
                    });
                }
            }
        });
    });
</script>
</div>

@stop