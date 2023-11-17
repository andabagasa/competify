<nav class="w-full flex justify-between items-center container mx-auto py-4 bg-neutral-50">
    <img src="{{asset('assets/images/logo-color.svg')}}" alt="Logo Competify" class="h-12 w-auto">
    <div class="flex gap-16">
        <a href="/" class="navlink">Beranda</a>
        <a href="/lomba" class="navlink">Lomba</a>
        <a href="/partner" class="navlink">Partner</a>
    </div>
    @if (Auth::check())
    <p>{{ Auth::user()->name }}</p>
    <a href="/logout">Logout</a>
    @else
    <div class="flex gap-6 h-12">
        <a href="/register" class="btn-secondary-normal">Daftar</a>
        <a href="/login" class="btn-primary-normal">Masuk</a>
    </div>
    @endif
</nav>
