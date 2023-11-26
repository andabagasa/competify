@extends('users.layouts.main', ['page' => 'profile'])

@section('title', 'Profile')

@section('content')
<main>
    <!-- Main -->
    <section class="w-full  items-center mt-6 justify-between container mx-auto">
        <!-- button back -->
        <a href="/" class="w-fit btn-secondary-small absolute top-24 flex gap-1 items-center">
            <x-phosphor-caret-left class="w-5 h-5" />
            <p>Kembali</p>
        </a>
        <!-- button back -->

        <!-- main top -->
        <div>
            <div class="max-w-full px-4  ">
                <div class="max-w-xl mx-auto text-center mb-12">
                    <!-- <h4 class="font-semibold  text-primary text-xl  mb-2 max-w-xl">Expereinced</h4> -->
                    <h2 class="text-center text-black text-4xl font-bold">Profil</h2>
                </div>
            </div>
            <div class="flex justify-center">
                <img class="object-cover w-[180px] h-[180px] rounded-full" src="{{ Storage::url($mahasiswa->photo) }}" />
            </div>
            <p class="text-zinc-600 text-base font-normal text-center mt-6">
                @if ($mahasiswa->nim == null)
                (Silahkan lengkapi Nomor Induk Mahasiswa) 
                @else
                {{$mahasiswa->nim}}    
                @endif
            </p>
            <p class="text-zinc-600 text-base font-normal text-center mt-1">
                @if ($mahasiswa->prodi == null && $mahasiswa->angkatan == null)
                (Silahkan lengkapi program studi dan angkatan)
                @else
                {{$mahasiswa->prodi}} - {{$mahasiswa->angkatan}}    
                @endif
            </p>
            <p class="text-black text-2xl font-bold text-center mt-2">{{ $guests->name }}</p>
            <p class="text-zinc-600 text-base font-normal text-center mt-2">{{ $guests->email }}</p>
            <div class="flex justify-center items-center gap-2 mt-2">
                @foreach ($mahasiswa->MahasiswaCategory as $category)
                <p class="tag">{{ ($category->Category)->name }}</p>
                @endforeach
            </div>
        </div>
        <!-- main top -->
        <!-- main bot -->

        <div>
            <div class="container">
                <div class="grid grid-cols-2 gap-4 mt-12 ">
                    <div class="p-6  rounded-2xl border-2 grid-cols-1 h-max ">
                        <h3 class="text-black text-2xl font-bold mb-8">Tentang Saya</h3>
                        <p>
                            @if ($mahasiswa->description == null)
                            (Silahkan lengkapi deskripsi diri)    
                            @else
                            {{$mahasiswa->description}}    
                            @endif
                        </p>
                    </div>
                    <div class="p-6 flex flex-col gap-6 rounded-2xl border-2 grid-cols-1">
                        <h3 class="text-black text- 2xl font-bold w-full">Tentang Saya</h3>
                        <div class="flex flex-wrap gap-6">
                            <div
                                class="w-12 h-12 p-3 bg-violet-100 rounded-lg justify-center items-center gap-2.5 inline-flex">
                                <img src="{{ asset('assets/images/mdi_whatsapp.svg') }}" class="w-6 h-6" alt="">
                            </div>
                            <div>
                                <h4 class="text-black text-lg font-bold">Whatsapp</h4>
                                <p class="text-zinc-600 text-base font-normal">{{$mahasiswa->no_tlp}}</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-6">
                            <div
                                class="w-12 h-12 p-3 bg-violet-100 rounded-lg justify-center items-center gap-2.5 inline-flex">
                                <img src="{{ asset('assets/images/mdi_instagram.svg') }}" class="w-6 h-6"
                                    alt="">
                            </div>
                            <div>
                                <h4 class="text-black text-lg font-bold">Instagram</h4>
                                <p class="text-zinc-600 text-base font-normal">                            
                                    @if ($mahasiswa->acc_instagram == null)
                                    (Silahkan lengkapi akun Instagram)    
                                    @else
                                    {{$mahasiswa->acc_instagram}}    
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-6">
                            <div
                                class="w-12 h-12 p-3 bg-violet-100 rounded-lg justify-center items-center gap-2.5 inline-flex">
                                <img src="{{ asset('assets/images/mdi_linkedin.svg') }}" class="w-6 h-6" alt="">
                            </div>
                            <div>
                                <h4 class="text-black text-lg font-bold">LinkedIn</h4>
                                <p class="text-zinc-600 text-base font-normal">
                                    @if ($mahasiswa->acc_linkedin == null)
                                    (Silahkan lengkapi akun LinkedIn)    
                                    @else
                                    {{$mahasiswa->acc_linkedin}}    
                                    @endif
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center my-12">
            <a href="{{ route('profile.edit', ['id' => $mahasiswa->mahasiswa_id]) }}" class="flex mr-2 grow-0  self-center justify-center w-[40%] h-12  btn-primary-normal"><img
                    src="asset/file-text-fill.svg" alt="" class="w-4 h-4 self-center hidden ">
                    Edit Profile</a>

        </div>
        <!-- main bot -->
    </section>
    <!-- Main -->
</main>

@endsection
