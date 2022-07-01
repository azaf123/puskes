@extends('front.material.master')
@section('title', 'Landing Page')

@section('content')
<section class="home" id="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(images/home2.jpeg) no-repeat;">
               <div class="content">
                  <h3>PROFIL</h3>
                  <span>Puskesmas 5 Ilir Palembang</span>
               </div>
            </div>
         </div>
      </div>
    
   </section>

   <!-- header section ends    -->
   <section class="about" id="about">
      <div class="col-md-12">
         <div class="content">
            <div class="col-md-6">
               <h5 class="title">Visi</h5>
               <ul class="list">
                  <li>Merumuskan dan menyusun kebijakan di bidang pengelolaan pendapatan daerah</li>
               </ul>
            </div>
            <div class="col-md-6">
               <h3 class="title">Misi</h3>
               <ul class="list">
                  <li>Merumuskan dan menyusun kebijakan di bidang pengelolaan pendapatan daerah</li>
                  <li>Meningkatkan kualitas sumber daya aparatur bidang pendapatan daerah seusai dengan
                     prinsip-prinsip penyelenggaraan pemerintahn yang baik (Good Governance)</li>
                  <li>Menjalin jejaring kerja (Networking) dan koordinasi secara sinergis di bidang pendapatan
                     daerah.</li>
               </ul>
            </div>
            <h5 class="title">Motto</h5>
            <p>Kesehatan Adalah Tanggung Jawab  Bersama
            </p>
         </div>
      </div>

   </section>

@stop