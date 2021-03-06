@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')

    <section class="home" id="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                @foreach ($header as $item)
                    <div class="swiper-slide slide" style="background-image: url('{{ asset('img/' . $item->gambar) }}');">
                        <div class="content">
                            <h3>{{ $item->judul }}</h3>
                            <span>{{ $item->konten }}</span>
                            <a href="#" class="btn">get started</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="image">
            <img src="{{ asset('front/images/mail2.png') }}" width="550px" height="500px" alt="">
        </div>

        <div class="content">
            <h3 class="title">Selamat Datang di Website
                Puskesmas 5 Ilir Palembang</h3>
            <p>Kesehatan Adalah Tanggung Jawab  Bersama.</p>
            <div class="icons-container">
                <div class="icons">
                    <img src="{{ asset('front/images/aboutt.png') }}" alt="">
                    <h3>Total Care</h3>
                </div>
                <div class="icons">
                    <img src="{{ asset('front/images/about2.png') }}" alt="">
                    <h3>Pendaftaran Online</h3>
                </div>
                <div class="icons">
                    <img src="{{ asset('front/images/about3.png') }}" alt="">
                    <h3>Dokter dan Perawat Berpengalaman</h3>
                </div>

            </div>
        </div>

    </section>

    <!-- about section ends -->

    <section class="doctor" id="doctor">

        <div class="heading">
            <h3>Dokter Kami</h3>
            <span>di Puskesmas 5 Ilir Palembang</span>
        </div>

        <div class="swiper doctor-slider">

            <div class="swiper-wrapper">
                @foreach ($doctor as $item)
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="{{ asset('img/' . $item->foto) }}" alt="">
                            <span>{{ $item->spesialisasi }}</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <a href="#"> <i class="fas fa-calendar"></i> Senin-Kamis </a>
                                <a href="#"> <i class="fas fa-clock"></i> 09.00-11.00 </a>
                            </div>
                            <a href="#" class="title">{{ $item->nama }}</a>
                            <p>{{ $item->spesialisasi }}</p>
                            <a href="#" class="btn">Daftar</a>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- artikel section starts  -->

    <section class="artikel" id="artikel">

        <div class="heading">
            <span>Artikel</span>
            <h3>INFO MAIL</h3>
        </div>

        <div class="swiper artikel-slider">

            <div class="swiper-wrapper"  style="height: 500px;" >
                @foreach ($article as $item)
                    <div class="swiper-slide slide" data-name="artikel-{{ $item->id }}" style="height: 450px;">
                        <img src="{{ asset('img/' . $item->gambar) }}" width="100%" height="auto" alt="">
                        <h3>{{ $item->judul }}</h3>
                        <button type="button" class="btn">Baca Yuk!</button>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <!-- artikel section ends -->

    <!-- artikel preview section starts  -->

    <section class="artikel-preview-container">

        <div id="close-preview" class="fas fa-times"></div>

        @foreach ($article as $item)
            <div class="artikel-preview" data-target="artikel-{{ $item->id }}">
                <img src="{{ asset('img/' . $item->gambar) }}"  style="object-fit: cover;"
                    alt="">
                <p>
                    {{ $item->konten }}
                </p>
            </div>
        @endforeach

    </section>

    {{-- layanan --}}
    <section class="layanan" id="layanan">

        <div class="heading">
            <h3>Jenis Pelayanan</h3>
            <span>di Puskesmas 5 Ilir Palembang</span>
        </div>

        <div class="swiper layanan-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <h3 class="title">Upaya Kesehatan Perorangan (Dalam Gedung) </h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Pendaftaran</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>

                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Rekam Medik</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">bla</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Pemeriksaan Umum</h3>
                            </div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Tindakan</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Pemeriksaan Gigi dan Mulut</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>

                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">Upaya Kesehatan Perorangan Dalam Gedung</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>Ruang MTBS</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Pelayanan Ibu dan Anak(KIA) / KB</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Laboratorium</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Farmasi</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Ruang Promkes</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">Upaya Kesehatan Masyarakat (Luar Gedung)</h3>
                    <h3 class="upaya">UKM Essensial</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>Upaya Promkes</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Upaya Kesling</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Upaya Pelayanan Gizi</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Upaya Pelayanan KIA / KB</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p>
                            </div>
                            <div class="price">$49.99</div>
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Upaya Pencegahan dan Pengendalian Penyakit</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <h3 class="title">Upaya Kesehatan Masyarakat (Luar Gedung)</h3>
                    <h3 class="upaya">UKM Pengembangan</h3>
                    <div class="box-container">
                        <div class="box">
                            <div class="info">
                                <h3>Pelayanan Kesehatan Jiwa</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Pelayanan Kesehatan Gigi dan Mulut</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Pelayanan Kesehatan Tradisional</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Pelayanan Kesehatan Olahraga</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Pelayanan Kesehatan Indra</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Pelayanan Kesehatan Lansia</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                        <div class="box">
                            <div class="info">
                                <h3>Pelayanan Kesehatan Kerja</h3>
                                {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, dolores.</p> --}}
                            </div>
                            {{-- <div class="price">$49.99</div> --}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>
    {{-- . --}}
    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <div class="heading">
            <h3>Galeri Kami</h3>
            <span>Di Puskesmas 5 Ilir Palembang</span>
        </div>

        <div class="gallery-container">
            @foreach ($galery as $item)
                <a href="{{ url('img/' . $item->gambar) }}" class="box">
                    <img src="{{ url('img/' . $item->gambar) }}" alt="">
                    <div class="icon"> <i class="fas fa-plus"></i> </div>
                </a>
            @endforeach
        </div>


        `


    </section>

    <!-- gallery section ends -->

@stop

