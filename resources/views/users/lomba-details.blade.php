@extends('users.layouts.main', ['page' => 'lomba-detail'])

@section('title', 'Detail Lomba')

@section('content')
<main class="container mx-auto">
    <a href="/partner" class="w-fit btn-secondary-small flex gap-1 items-center absolute top-24">
        <x-phosphor-caret-left class="w-5 h-5"/>
        <p>Kembali</p>
    </a>
    <div class="flex gap-6 w-full my-20">
        <img src="{{ Storage::url($informasiLombas->poster) }}" class="w-1/2 h-auto rounded-2xl">
        <div class="flex flex-col p-6 gap-6 rounded-2xl bg-white w-1/2">
            <div class="flex flex-col gap-2">
                <p class="text-neutral-500">{{ $informasiLombas->organizer_name }}</p>
                <h1 class="text-4xl font-bold">{{ $informasiLombas->title }}</h1>
                <div class="flex flex-wrap items-center gap-2 mt-2">
                    @foreach ($informasiLombas->InformasiLombaCategory as $category)
                    <p class="font-medium text-sm py-1 px-3 bg-primary-100 text-primary-300 rounded-full">{{ ($category->Category)->name }}</p>
                    @endforeach
                </div>
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Deskripsi Lomba</h2>
                <p>{{ $informasiLombas->description }}</p>
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Syarat & Ketentuan</h2>
                <p>{{ $informasiLombas->term_and_condition }}</p>
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Hadiah</h2>
                <p>{{ $informasiLombas->reward }}</p>
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Kontak</h2>
                <p>{{ $informasiLombas->contact }}</p>
            </div>
        </div>
    </div>
</main>
{{-- <main>
    <section>
        <a href="/lomba" class="w-fit btn-secondary-small flex gap-1 items-center">
            <x-phosphor-caret-left class="w-5 h-5"/>
            <p>Kembali</p>
        </a>
        <img src="" alt="">
    </section>
</main>
    <main>
        <section id="main" class="mt-12 mx-24  ">
            <div class=" grid grid-cols-4 gap-4  ">
                <main class=" col-span-2 ">
                    <img src="{{ Storage::url($informasiLombas->poster) }}" alt="" class="object-cover w-full h-100 rounded-t-lg">

                </main>

                <aside class="bg-white col-span-2  rounded-2xl p-6 h-max ">
                    <!-- filter -->
                    <div class="container mb-16">
                        <div class="flex flex-col gap-1">
                            <h1 class="text-4xl font-bold">{{ $informasiLombas->title }}</h1>
                            <p class="text-sm text-neutral-500">{{ $informasiLombas->organizer_name }}</p>
                        </div>
                        <div class="flex flex-col gap-2 p-2 rounded bg-primary-100 mb-8" >
                            <div class="flex justify-between items-center text-primary-300">
                                <p>Open Registration</p>
                                <p class="font-semibold">{{ $informasiLombas->open_reg }}</p>
                            </div>
                            <div class="flex justify-between items-center text-red-500">
                                <p>Close Registration</p>
                                <p class="font-semibold">{{ $informasiLombas->close_reg }}</p>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col gap-2">
                            <div class="flex items-center gap-1">
                                @foreach ($informasiLombas->InformasiLombaCategory as $category)
                                <p class="tag">{{ ($category->Category)->name }}</p>
                                @endforeach
                            </div>
                            <div class="flex items-center gap-2">
                                <p class="">{{ $informasiLombas->contact }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-neutral-700 text-base font-normal  leading-normal mb-12 mt-4">
                        <div>
                            <p class="">{{ $informasiLombas->description }}</p>
                        </div>

                        <div>
                            <p class="">{{ $informasiLombas->reward }}</p>
                        </div>

                        <div>
                            <p class="">{{ $informasiLombas->term_and_condition }}</p>
                        </div>
                    </div>
                </aside>
            </div>

        </section>


    </main> --}}
@endsection
