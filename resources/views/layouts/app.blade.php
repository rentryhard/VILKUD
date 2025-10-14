<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vilkud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-4 py-3">
    <div class="d-flex align-items-center">
        <img src="{{ asset('images/vilkud.png') }}" alt="Logo" height="40" class="me-2">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">VILKUD</a>
    </div>
    <div>
        <a href="{{ route('home') }}" class="btn btn-dark">Beranda</a>
        <a href="{{ route('menu') }}" class="btn btn-dark">Produk</a>
        <a href="{{ route('outlets') }}" class="btn btn-dark">Outlet</a>
        <a href="#" class="btn btn-dark">Tentang</a>
        <a href="#" class="btn btn-dark">Events</a>
        <a href="#" class="btn btn-dark">Kemitraan</a>
        <a href="#" class="btn btn-dark">Kontak</a>
        <a href="#" class="btn btn-light ms-3">Login Mitra</a>
    </div>
</nav>

@yield('content')

</body>
</html>
