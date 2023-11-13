@extends('layouts.main', ['page' => 'login'])

@section('title', 'Masuk')

@yield('content')
@section('content', )
<main>
    <section class="w-full h-screen flex items-center justify-between container mx-auto">
        <a href="/" class="w-fit btn-secondary-small absolute top-8 flex gap-1 items-center">
            <x-phosphor-caret-left class="w-5 h-5"/>
            <p>Kembali</p>
        </a>
        <img src="{{asset('assets/images/login.png')}}" alt="" class="hidden md:block h-[480px] w-auto">
        <div class="p-12 flex flex-col gap-6 bg-white rounded-2xl shadow">
            <h1 class="text-5xl font-bold">Masuk</h1>
            <form action="/login" method="post" class="w-full md:w-[360px] flex flex-col gap-1 mt-6">
                @csrf
                <label for="email" class="label-input">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan email anda" class="input-field">
                <label for="password" class="label-input mt-3">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password anda" class="input-field">
                <button type="submit" class="btn-primary-normal mt-5">Masuk</button>
            </form>
            <p class="text-neutral-500 text-center">Belum punya akun? <a href="/register" class="font-semibold text-primary-300 hover:text-primary-400">Buat Akun</a> di sini.</p>
        </div>
    </section>
</main>
@endsection
