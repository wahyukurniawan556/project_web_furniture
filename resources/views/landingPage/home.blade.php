@extends('layout.main')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <h1>Welcome to Funiture Store</h1>
        <p>Temukan berbagai furnitur terbaik untuk rumah Anda.</p>
        <a href="{{ route('landing.products') }}" class="btn btn-primary">Lihat Produk</a>
    </div>
@endsection
