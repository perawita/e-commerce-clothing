@extends('shop.index')
@section('title', 'Profile ' . $id_user)

@section('content')
    <!-- Main Content -->
    @include('shop.content.profile.partials.article')
@endsection
