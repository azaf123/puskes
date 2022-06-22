@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')
<section class="order" id="order">

<div class="heading">
    <span>KAJIAN AWAL</span>
    <h3>RESERVASI</h3>
</div>


<form action="{{url('/reservasi')}}" method="POST">
    @csrf
    <div class="box-container">
        <div class="box">
            <input type="hidden" name="noberobat" value="3">
            <div class="inputBox">
                <span><b> Nama Lengkap Pasien</b></span>
                <select name="nama" class="form-control" id="exampleFormControlSelect1">
                    @foreach($patient as $item)
                    <option value="{{$item->id}}">{{$item->nama_pasien}}</option>
                    @endforeach
                   </select>
            </div>
            <div class="inputBox">
                <span><b>Poli</b> </span>
                <select name="poli" class="form-control" id="poli">
                    @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                    @endforeach
                   </select>
            </div>
            
            <div class="inputBox">
                <span><b>No</b> </span>
                <span><b>Antrean</b> </span>
                <select name="antrean" class="form-control" id="antrean">
                   
                   </select>
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

@stop