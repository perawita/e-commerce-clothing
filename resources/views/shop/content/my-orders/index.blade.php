@extends('shop.index')
@section('title', 'Order ' . $id_user)

@section('content')
    @include('shop.content.my-orders.partials.article')
@endsection

@section('script')
    @include('shop.content.my-orders.script')
@endsection
