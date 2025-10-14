@extends('layouts.app')

@section('content')
<h2>Our Outlets</h2>
<ul>
    @foreach($outlets as $outlet)
        <li>{{ $outlet->name }} - {{ $outlet->address }}</li>
    @endforeach
</ul>
@endsection
