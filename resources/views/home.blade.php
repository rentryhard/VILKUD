@extends('layouts.app')

@section('content')
<style>
    /* Tombol transparan dengan outline putih */
    .btn-outline-white {
        background-color: transparent;
        border: 2px solid #fff;
        color: #fff;
        transition: all 0.3s ease;
    }

    .btn-outline-white:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
        border-color: #fff;
    }

    /* Supaya teks dan posisi tetap bagus */
    .hero-container {
        position: relative;
        overflow: hidden;
        text-align: center;
        color: white;
    }

    .hero-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        background: rgba(0, 0, 0, 0.4);
        padding: 40px;
        border-radius: 10px;
    }

    #bg-video {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }
</style>

<div class="hero-container">
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="hero-overlay">
        <h1>VILKUD FEEL GOOD</h1>
        <p>Temukan menu favorit anda dan nikmati bersama orang terdekat anda</p>
        <div class="hero-buttons">
            <a href="{{ route('menu') }}" class="btn btn-outline-white me-2">🍡 Explore Menu</a>
            <a href="{{ route('outlets') }}" class="btn btn-outline-white">📍 Our Outlets</a>
        </div>
    </div>
</div>
@endsection
