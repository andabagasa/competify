<nav class="w-full flex justify-between items-center container mx-auto py-4 bg-neutral-50 sticky top-0 z-50">
    <img src="{{asset('assets/images/logo-color.svg')}}" alt="Logo Competify" class="h-12 w-auto">
    <div class="flex gap-16">
        <a href="/" class="navlink">Beranda</a>
        <a href="/lomba" class="navlink">Lomba</a>
        <a href="/partner" class="navlink">Partner</a>
    </div>
    @if (Auth::check())
    <div class="flex gap-4 items-center cursor-pointer" onclick="toggleDropdown()">
        <div class="flex flex-col">
            <p class="font-bold">{{ Auth::user()->name }}</p>
            <p class="text-neutral-500">{{ Auth::user()->email }}</p>
        </div>
        <x-phosphor-caret-down id="caret" class="w-6 h-6"/>
        <div id="dropdown" class="absolute top-20 right-0 bg-white border border-neutral-300 rounded-md shadow-lg z-10">
            <a href="/profile" class="flex justify-start items-center py-3 pl-4 pr-6 gap-4 hover:bg-primary-100">
                <x-phosphor-user class="w-6 h-6"/>
                <p>Profil Saya</p>
            </a>
            <a href="/logout" class="flex justify-start items-center py-3 pl-4 pr-6 gap-4 text-red-600 hover:bg-red-100">
                <x-phosphor-sign-out class="w-6 h-6"/>
                <p>Logout</p>
            </a>
        </div>
    </div>
    @else
    <div class="flex gap-6 h-12">
        <a href="/register" class="btn-secondary-normal">Daftar</a>
        <a href="/login" class="btn-primary-normal">Masuk</a>
    </div>
    @endif
</nav>

<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("dropdown");
        var caret = document.getElementById("caret");

        dropdown.classList.toggle("hidden");
        caret.classList.toggle("rotate-180");
    }
</script>
