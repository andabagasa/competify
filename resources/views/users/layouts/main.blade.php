<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Competify | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app,js'])
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">
</head>
<body>
    @if ($page == 'login' || $page == 'register')
        @yield('content')
    @elseif ($page == 'profile' || $page == 'profile-edit')
        <x-navbar/>
        @yield('content')
    @else
        <x-navbar/>
        @yield('content')
        <x-footer/>
    @endif
</body>
</html>
