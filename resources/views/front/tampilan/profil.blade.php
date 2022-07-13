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
                   <p>Tercapainya Wilayah Kerja yang sehat secara optimal dengan bertumpu pada pelayanan prima dan pemberdayaan masyarakat
                  </p> 
               
            </div>
            <div class="col-md-6">
               <h3 class="title">Misi</h3>
               <ul class="list">
                  <li>Memelihara dan meningkatkan upaya pelayanan prima</li>
                  <li>Meningkatkan profesionalisme provider</li>
                  <li>Meningkatkan kemitraan dan pemberdayaan masyarakat</li>
                  <li>Menurunkan angka kesakitan dan resiko kematian</li>
               </ul>
            </div>
            <h5 class="title">Motto</h5>
            <p>Kesehatan Adalah Tanggung Jawab  Bersama
            </p>
         </div>
      </div>

   </section>

@stop