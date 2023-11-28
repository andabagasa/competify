@extends('users.layouts.main', ['page' => 'beranda'])

@section('title', 'Beranda')

@section('content')
<main>
    {{-- Hero --}}
    <section class="w-full h-[calc(100vh-80px)] flex gap-6 justify-between items-center container mx-auto">
        <div class="flex flex-col gap-6">
            <h1 class="text-5xl font-bold">Temukan Lomba dan Partner Lomba Terbaik Anda</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id egestas. Iaculis nec cursus sit proin urna lorem ac potenti morbi.</p>
            <div class="flex h-12 gap-6 mt-6">
                <a href="/lomba" class="btn-primary-normal">Cari Lomba</a>
                <a href="/partner" class="btn-secondary-normal">Cari Partner</a>
            </div>
        </div>
        <img src="{{asset('assets/images/hero.png')}}" alt="" class="h-[420px] w-auto">
    </section>

    {{-- Lomba --}}
    <section class="w-full container mx-auto mb-20">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-4xl font-bold">Temukan Lomba Terbaik</h2>
            <div class="flex items-center gap-4">
                <a href="/lomba" class="btn-secondary-small mr-2">Lihat Detail</a>
                <span class="btn-prev-lomba btn-icon"><x-phosphor-caret-left class="w-5 h-5"/></span>
                <span class="btn-next-lomba btn-icon"><x-phosphor-caret-right class="w-5 h-5"/></span>
            </div>
        </div>
        <div class="swiper swiper-lomba">
            <div class="flex swiper-wrapper">
                @foreach ($informasiLombas as $informasiLomba)
                <div class="w-full bg-white rounded-lg swiper-slide">
                    <a href="{{ route('lomba.details', ['id' => $informasiLomba->id_lomba]) }}">
                        <img src="{{ Storage::url($informasiLomba->poster) }}" alt="" class="object-cover w-full h-40 rounded-t-lg">
                        <div class="p-4 flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                @foreach ($informasiLomba->InformasiLombaCategory->take(3) as $category)
                                <p class="tag">{{ Str::of(optional($category->Category)->name)->limit(14) }}</p>
                                @if($loop->iteration === 3 && $informasiLomba->InformasiLombaCategory->count() > 3)
                                <p class="tag/profile-edit">...</p>
                                @break
                                @endif
                                @endforeach
                            </div>
                            <div class="w-full flex flex-col gap-1">
                                <h3 class="text-2xl w-full font-bold">{{ Str::of($informasiLomba->title)->limit(20) }}</h3>
                                <p class="text-sm text-neutral-500">{{ $informasiLomba->organizer_name }}</p>
                            </div>
                            <div class="flex flex-col gap-2 p-2 rounded bg-primary-100">
                                <div class="flex justify-between items-center text-primary-300">
                                    <p>Open Registration</p>
                                    <p class="font-semibold">{{ $informasiLomba->open_reg }}</p>
                                </div>
                                <div class="flex justify-between items-center text-red-500">
                                    <p>Close Registration</p>
                                    <p class="font-semibold">{{ $informasiLomba->close_reg }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Partner --}}
    <section class="w-full container mx-auto mb-20">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-4xl font-bold">Temukan Partner Terbaik</h2>
            <div class="flex items-center gap-4">
                <a href="/partner" class="btn-secondary-small mr-2">Lihat Detail</a>
                <span class="btn-prev-partner btn-icon"><x-phosphor-caret-left class="w-5 h-5"/></span>
                <span class="btn-next-partner btn-icon"><x-phosphor-caret-right class="w-5 h-5"/></span>
            </div>
        </div>
        <div class="swiper swiper-partner">
            <div class="flex swiper-wrapper">
                @foreach ($mahasiswas as $mahasiswa)
                    <div class="w-full bg-white rounded-lg swiper-slide">
                        <a href="{{ route('partner.details', ['id' => $mahasiswa->mahasiswa_id]) }}">
                        <img src="{{ Storage::url($mahasiswa->photo) }}" alt="" class="object-cover w-full h-40 rounded-t-lg">
                        <div class="p-4 flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                @foreach ($mahasiswa->MahasiswaCategory->take(3) as $category)
                                <p class="tag">{{ Str::of(optional($category->Category)->name)->limit(14) }}</p>
                                @if($loop->iteration === 3 && $mahasiswa->MahasiswaCategory->count() > 3)
                                <p class="tag/profile-edit">...</p>
                                @break
                                @endif
                                @endforeach
                            </div>
                            <div class="flex flex-col gap-1">
                                <h3 class="text-2xl font-bold">{{ Str::of($mahasiswa->guest->name)->limit(16) }}</h3>
                                <p class="text-sm text-neutral-500">{{ $mahasiswa->prodi }} - {{ $mahasiswa->angkatan }}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
