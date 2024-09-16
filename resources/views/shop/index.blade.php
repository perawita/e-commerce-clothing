<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('shop.partials.meta')
</head>

<x-body>
    <x-background>
        @include('shop.partials.header.header')
        <x-main>
            @yield('content')
        </x-main>
        @include('shop.partials.footer.footer')
    </x-background>
    @include('shop.partials.script.script')
</x-body>

</html>
