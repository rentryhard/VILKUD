@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-16 min-h-screen">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Menu Kami</h2>

        {{-- 🧋 Grid Daftar Produk --}}
        @if($menus->count() > 0)
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                @foreach($menus as $menu)
                    <div 
                        class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300"
                    >
                        {{-- ✅ Gambar produk (ambil dari database storage) --}}
                        <img 
                            src="{{ $menu->image ? asset('storage/' . $menu->image) : asset('images/menu/default.jpg') }}" 
                            alt="{{ $menu->name }}" 
                            class="w-full h-56 object-cover transform hover:scale-105 transition-transform duration-300"
                            onerror="this.src='{{ asset('images/menu/default.jpg') }}'"
                        >

                        <div class="p-5 text-center">
                            <p class="text-amber-600 text-xs font-semibold mb-1 uppercase tracking-wide">Menu Spesial</p>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2 leading-snug">
                                {{ $menu->name }}
                            </h3>
                            @if($menu->description)
                                <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                                    {{ $menu->description }}
                                </p>
                            @endif
                            <p class="text-gray-900 font-bold text-lg">
                                Rp{{ number_format($menu->price, 0, ',', '.') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- ❗ Jika belum ada data --}}
            <div class="text-center text-gray-500 mt-12">
                <p class="text-lg">Belum ada menu yang tersedia saat ini.</p>
            </div>
        @endif
    </div>
</div>
@endsection
