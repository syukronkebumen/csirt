@extends('layouts.app')

@section('content')

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Aduan Siber</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Beranda</a></li>
                <li class="current">Aduan Siber</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Aduan Siber</h2>
        <p>Berikut ini adalah daftar aduan siber yang telah diterima</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 mt-1">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/img/under-development/under-dev.jpg') }}" frameborder="0" style="border:0; width: 100%; height: auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </div><!-- End Google Maps -->
        </div>
    </div>
</section>

@endsection