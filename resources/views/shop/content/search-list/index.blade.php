@extends('shop.index')
@section('title', 'search ' . $name_product)
@section('content')

    <!-- Kolom Mobile Filter Produk -->
    @include('shop.content.search-list.partials.nav-lg')
    <div class="flex space-x-1">

        <!-- Kolom Produk -->
        @include('shop.content.search-list.partials.article')

        <!-- Kolom Filter Produk -->
        @include('shop.content.search-list.partials.nav')

    </div>
@endsection

@section('script')
    @include('shop.content.search-list.script')
@endsection
