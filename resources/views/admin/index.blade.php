@extends('layouts.admin')

@section('content')

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="col justify-content-center">
            <div class="row-lg-6 d-flex flex-column justify-content-center">
                <h1>Selamat Datang di Rental Mobil</h1>
                <h2>Selamat datang di halaman admin </h2>
            </div>
            <div class="row-lg-6 hero-img">
                <img src="{{ asset('FlexStart/assets/img/mobil.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section><!-- End Hero -->
@endsection