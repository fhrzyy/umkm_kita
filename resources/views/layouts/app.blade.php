<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'UMKM Kita')</title>

    @vite(['resources/css/stylehome.css', 'resources/js/app.js'])
</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</body>
</html>