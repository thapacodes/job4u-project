<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/ckeditor5/build/ckeditor.js') }}"></script>
    <livewire:styles />
    @yield('page-title')
</head>

<body id="body" style="overflow-x: hidden;">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block p-0">
            @include('components.admin.side-panel')
        </div>
        <div class="col-md-12 col-lg-9 p-0">
            @include('components.admin.navbar')
            @yield('content')
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <livewire:scripts />
    @yield('scripts')
</body>

</html>
