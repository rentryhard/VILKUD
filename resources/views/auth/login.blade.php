<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="bg">
<div class="login-card">
<h2 class="brand">Selamat Datang</h2>


@if($errors->any())
<div class="error">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


<form method="POST" action="{{ route('login.attempt') }}">
@csrf


<label for="email">Email</label>
<input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>


<label for="password">Password</label>
<input id="password" type="password" name="password" required>


<div class="remember-row">
<input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
<label for="remember">Remember me</label>
</div>


<button type="submit" class="btn">Login</button>
</form>


<p class="small">Belum punya akun? Hubungi admin.</p>
</div>
</div>
</body>
</html>