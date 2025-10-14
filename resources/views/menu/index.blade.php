@extends('layouts.app')

@section('content')
<h2>Our Menu</h2>
<ul>
    @foreach($menus as $menu)
        <li>{{ $menu->name }} - Rp{{ number_format($menu->price, 0) }}</li>
    @endforeach
</ul>
@endsection
