<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates._header')
</head>
<body>
    @include('templates._navbar')
    @yield('content')
    @include('templates._scripts')
</body>
</html>
