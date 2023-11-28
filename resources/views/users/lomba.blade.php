@extends('users.layouts.main', ['page' => 'lomba'])

@section('title', 'Lomba')

@section('content')
<main>
    <!-- Header  -->
    <header class="mx-24 mt-12">
        <div class=" w-full mx-auto h-60 relative bg-blue-600 rounded-3xl flex justify-center flex-wrap">
            <div class=" text-center text-white text-5xl font-bold  self-center w-full mt-16 ">Lomba
            </div>
            <div class="w-[714px] text-center text-neutral-50 text-base font-normal  leading-normal mb-16 mt-4">
                Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id egestas. Iaculis nec cursus sit
                proin urna lorem ac potenti morbi.
            </div> 

            <div class="absolute bottom-0 right-0"><img src="{{ asset('assets/images/tl.png') }}" alt=""></div>
            <div class="absolute top-0 left-0"><img src="{{ asset('assets/images/rb.png') }}" alt=""></div>

        </div>
    </header>
    <!-- Header -->

    <!-- Main -->
    <section id="main" class="mt-12 mx-24  ">
        <div class=" grid grid-cols-4 gap-4  ">
            <aside class="bg-white col-span-1  rounded-2xl p-6 h-max ">
                <!-- filter -->
                <div class="container">
                    <div class="flex flex-wrap justify-between">
                        <div class="flex items-center">
                            <x-phosphor-funnel class="w-7 h-7" />
                            <p class="text-black text-2xl font-bold">Filter</p>
                        </div>
                        <a href="" class="self-center text-primary-300 text-sm font-semibold">Reset</a>
                    </div>
                    <div class="container">                    
                            <!-- Kategori filter -->
                        <div class="flex flex-wrap w-full mt-2">
                             <form action="{{ route('show.lombas') }}" method="GET">
                                 @foreach ($categories as $category)
                                <div class="flex flex-wrap w-full mt-2">
                                    <input type="checkbox" name="categories[]" value="{{ $category->category_id }}" id="category_{{ $category->category_id }}" class=""
                                        {{ in_array($category->category_id, request('categories', [])) ? 'checked' : '' }}>
                                    <label for="category_{{ $category->category_id }}" class="pl-2 text-black text-sm font-normal">{{ $category->name }}</label>
                                </div>
                                @endforeach
                                <button type="submit" class="bg-primary-300 text-white px-4 py-2 rounded-lg mt-4">Filter</button>
                            </form>
                        </div>
                
                    </div>
                </div>

            </aside>
            <main class=" col-span-3 ">
                <!-- search -->
                <div class="flex justify-end">
                    <div class="   w-2/3 border border-stone-300 rounded-lg">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <form action="{{ route('show.lombas') }}" method="GET">
                                <input type="search" name="query" id="default-search" class="block w-full py-3 px-6 ps-10 text-neutral-400 text-base font-normal rounded-lg" placeholder="Cari Lomba">
                                <button type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- search -->

                <!-- carousel -->
                <div class="mt-6 mb-12">
                    <div class="grid grid-cols-3 gap-4">
                        <div class=" bg-white rounded-lg">
                            @forelse ($informasiLombas as $informasiLomba)
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
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-2xl font-bold">{{ $informasiLomba->title }}</h3>
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
                            @empty
                            <p>Lomba tidak ditemukan.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- carousel -->

                <!-- pagination -->
                <!-- pagination -->

            </main>

        </div>


    </section>
    <!-- Main -->


</main>

@endsection

