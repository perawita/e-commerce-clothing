@extends('shop.index')
@section('title', 'Shopping Cart ' . $id_cart)
@section('content')
    <!-- Kolom Keranjang -->
    @include('shop.content.shopping-cart.partials.article')
@endsection
