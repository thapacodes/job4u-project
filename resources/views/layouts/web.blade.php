<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
    <script src="{{ asset('js/ckeditor5/build/ckeditor.js') }}"></script>
    <livewire:styles />
    @yield('page-title')
</head>
<body>
    @include('components.web.navbar')
    @yield('content')
    @include('components.web.footer')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <livewire:scripts />
    @yield('scripts')
</body>
</html>