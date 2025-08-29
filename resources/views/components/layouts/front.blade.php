<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    @stack('styles')
</head>
<body>
    @include('partials.header')
    <main>
        {{ $slot }}
    </main>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    @vite(['resources/js/app.js'])
    @fluxScripts
    @stack('scripts')
</body>
</html>