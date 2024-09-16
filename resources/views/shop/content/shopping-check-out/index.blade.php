@extends('shop.index')
@section('title', 'Check Out ' . $id_user)
@section('content')
    <!-- Kolom Keranjang -->
    @include('shop.content.shopping-check-out.partials.article')

@endsection
