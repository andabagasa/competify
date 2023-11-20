<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Competify | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app,js'])
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
</head>
<body>
    <nav class="w-full h-fit bg-primary-300 sticky top-0 z-50">
        <div class="flex justify-between items-center container mx-auto py-4">
            <img src="{{asset('assets/images/logo-white.svg')}}" alt="Logo Competify" class="h-12 w-auto">
            <div class="flex gap-16">
                <a href="/admin/lomba" class="text-white font-semibold duration-100 hover:text-primary-100">Lomba</a>
                <a href="/admin/kategori" class="text-white font-semibold duration-100 hover:text-primary-100">Kategori</a>
            </div>
            <a href="" class="btn-primary-small bg-white text-primary-300 hover:bg-primary-100">Logout</a>
        </div>
    </nav>
    @yield('content')
</body>
</html>
