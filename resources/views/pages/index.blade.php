@extends('includes/head')
@extends('layout/main')

@section('title', 'Helping Hand')

@section('content')
<!-- Body -->
<div class="container">
        <div class="row custom-section d-flex align-items-center">
            <div class="col-12 col-lg-6 kiri">
                <h2>Helping Hand</h2>
                <h3>Helping Without Boundaries</h3>
                <p>Aplikasi Helping Hand merupakan inovasi digital dari Bank Indonesia yang memudahkan kamu untuk mengajukan permohonan bantuan sosial Bank Indonesia.</p>
                <a href="#" class="nav-item btn btn-primary tombol">Ajukan Proposal</a>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="/assets/img/slider_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/assets/img/slider_2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/assets/img/slider_3.jpg" alt="Third slide">
                    </div>
                  </div>
                </div>
                

                <div class="btn-tiga d-flex justify-content-around">
                    <a class="btn btn-primary btn-circle btn-xl" href="">
                        <img class="gambar" src="/assets/img/btn_list.png" alt="">
                        <span class="text-bot">List Penerima<br>Bantuan</span>
                    </a>
                    <a class="btn btn-primary btn-circle btn-xl" href="">
                        <img class="gambar" src="/assets/img/btn_dashboard.png" alt="">
                        <span class="text-bot">Dashboard Penerima<br>Bantuan</span>
                    </a>
                    <a class="btn btn-primary btn-circle btn-xl" href="">
                        <img class="gambar-doc" src="/assets/img/btn_doc.png" alt="">
                        <span class="text-bot">Dokumentasi Bantuan<br>PSBI</span>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <img src="assets/img/illustration.png" alt="Helping Hand banner">
            </div>
        </div>
    </div>
  <!-- End of Body -->

@endsection