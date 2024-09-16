@extends('shop.index')
@section('title', isset($id_product) ? 'Contact ask ' . $id_product : 'Contact')
@section('content')
        @if (isset($id_product))
            @include('shop.content.contact.partials.costumer-services')
        @else
            <!-- Kolom Contact -->
            @include('shop.content.contact.partials.contact')
        @endif
        <br>
@endsection

@section('script')
    @include('shop.content.contact.script')
@endsection
