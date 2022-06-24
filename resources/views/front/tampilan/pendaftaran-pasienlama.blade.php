@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')
<section class="order" id="order">

    <div class="heading">
        <span>KAJIAN AWAL</span>
        <h3>RAWAT JALAN</h3>
    </div>


    <form action="{{url('/pendaftaran-pasien-lama')}}" method="POST">
        @csrf
        <div class="box-container">
            <div class="box">
                <div class="inputBox">
                    <span><b>No RM</b></span>
                    <input list="answers" class="form-control @error('noberobat') is-invalid @enderror" id="answer">
                    <datalist id="answers">
                        @foreach ($treatment as $item)
                        <option data-value="{{$item->id}}">{{$item->no_berobat}}</option>
                        @endforeach
                    </datalist>
                    <input type="hidden" name="noberobat" id="answer-hidden">
                    @error('noberobat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="inputBox">
                    <span><b> Nama Lengkap Pasien</b></span>
                  <select name="nama" id="nama">

                  </select>
                </div>

                <div class="inputBox">
                    <span><b>Jenis Kelamin</b> </span>
                    <select name="jeniskelamin" class="form-control" id="jeniskelamin">
                      
                    </select>
                </div>

                <div class="inputBox">
                    <span>
                        <b> Tanggal Lahir</b></span>
                    <select name="ttl" id="ttl"></select>
                </div>

            </div>

        </div>
        <input id="submit" type="submit" value="Simpan" class="btn">
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script>
    $('#answer').on('change', function() {
        var id = $(this).val(); // mendapatkan nilai value
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
</script> -->

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
</section>
@stop

<!-- <input list="datalistOptions" type="text" class="form-control @error('noberobat') is-invalid @enderror" placeholder="No Berobat" id="noberobat" name="noberobat">
                    <datalist id="datalistOptions">
                        @foreach ($treatment as $item)
                        <option data-value="{{$item->id}}">{{$item->no_berobat}}</option>
                        @endforeach
                    </datalist>
                    @error('noberobat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror -->