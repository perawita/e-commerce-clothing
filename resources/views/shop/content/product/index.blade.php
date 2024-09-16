@extends('shop.index')
@section('title', $name_product)
@section('content')
    <div class="flex space-x-1">
        <!-- Kolom Produk -->
        @include('shop.content.product.partials.article')

        <!-- Kolom Daftar Produk -->
        @include('shop.content.product.partials.nav')
    </div>

    <!-- Review Template with Wider Background -->
    <div class="flex top-full w-full max-w-screen-lg mt-6 col-span-3">
        @include('shop.content.product.partials.review')
    </div>
@endsection
