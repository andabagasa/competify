@extends('users.layouts.main', ['page' => ''])

@section('title', '')

@section('content')
<main class="container mx-auto">
    <a href="/partner" class="w-fit btn-secondary-small flex gap-1 items-center absolute top-24">
        <x-phosphor-caret-left class="w-5 h-5"/>
        <p>Kembali</p>
    </a>
    <div class="flex flex-col justify-center items-center gap-12 pt-6 pb-20">
        <div class="flex flex-col gap-6 justify-center items-center">
            @if ($mahasiswa->photo == null)
            <span class="p-[42px] rounded-full bg-primary-100 text-primary-300">
                <x-phosphor-user-circle class="w-24 h-24"/>
            </span>
            @else
            <img src="{{ Storage::url($mahasiswa->photo) }}" alt="" class="object-cover w-[180px] h-[180px] rounded-full">
            @endif
            <div class="flex flex-col gap-2 justify-center items-center">
                <p class="text-neutral-500">
                    @if ($mahasiswa->prodi == null && $mahasiswa->angkatan == null)
                        Program Studi - Angkatan
                    @else
                        {{ $mahasiswa->prodi }} - {{ $mahasiswa->angkatan }}
                    @endif
                </p>
                <h2 class="font-bold text-2xl">{{ $guests->name }}</h2>
                <p class="text-neutral-500">
                    @if ($mahasiswa->nim == null)
                        NIM
                    @else
                        {{ $mahasiswa->nim }}
                    @endif
                </p>
            </div>
        </div>
        <div class="flex gap-6 w-full">
            <div class="w-1/2 p-6 bg-white border border-neutral-300 rounded-2xl flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Tentang Diri</h2>
                <p class="text-neutral-500">
                    @if ($mahasiswa->description == null)
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum enim delectus nulla ab ipsam. Accusamus fuga beatae suscipit, laudantium ipsam temporibus odio ullam nam similique facilis eveniet repellendus inventore natus!
                    @else
                    {{ $mahasiswa->description }}
                    @endif
                </p>
            </div>
            <div class="w-1/2 flex flex-col gap-6">
                <div class="p-6 bg-white border border-neutral-300 rounded-2xl flex flex-col gap-4">
                    <h2 class="text-2xl font-bold">Minat</h2>
                    <div class="w-full flex flex-wrap gap-2">
                        @foreach ($mahasiswa->MahasiswaCategory as $category)
                        <p class="tag">{{ ($category->Category)->name }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="p-6 bg-white border border-neutral-300 rounded-2xl flex flex-col gap-4">
                    <h2 class="text-2xl font-bold">Kontak</h2>
                    <div class="flex gap-6">
                        <a href="https://wa.me/{{ $mahasiswa->no_tlp }}" target="_blank" class="flex flex-col gap-2 justify-center items-center">
                            <span class="p-4 bg-primary-100 rounded-lg text-primary-300">
                                <x-phosphor-whatsapp-logo class="w-8 h-8"/>
                            </span>
                            <p class="font-medium">Whatsapp</p>
                        </a>
                        <a href="{{ $mahasiswa->acc_linkedin }}" target="_blank" class="flex flex-col gap-2 justify-center items-center">
                            <span class="p-4 bg-primary-100 rounded-lg text-primary-300">
                                <x-phosphor-linkedin-logo class="w-8 h-8"/>
                            </span>
                            <p class="font-medium">LinkedIn</p>
                        </a>
                        <a href="{{ $mahasiswa->instagram }}" target="_blank" class="flex flex-col gap-2 justify-center items-center">
                            <span class="p-4 bg-primary-100 rounded-lg text-primary-300">
                                <x-phosphor-instagram-logo class="w-8 h-8"/>
                            </span>
                            <p class="font-medium">Instagram</p>
                        </a>
                        <a href="mailto:{{ $guests->email }}" target="_blank" class="flex flex-col gap-2 justify-center items-center">
                            <span class="p-4 bg-primary-100 rounded-lg text-primary-300">
                                <x-phosphor-envelope class="w-8 h-8"/>
                            </span>
                            <p class="font-medium">Email</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
