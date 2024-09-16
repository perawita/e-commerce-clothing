@extends('shop.index')
@section('title', 'Home')

@section('content')
    {{-- @if (isset($record)) --}}
    <x-banner>
        @include('shop.content.home.partials.banner-content')
    </x-banner>

    <!-- Kolom Produk -->
    <div class="flex space-x-1">
        @include('shop.content.home.partials.nav')
        @include('shop.content.home.partials.article')
    </div>
    {{-- @else
        @include('shop.partials.content.home.loading')
    @endif --}}
@endsection

@section('script')
    @include('shop.content.home.script')
@endsection
