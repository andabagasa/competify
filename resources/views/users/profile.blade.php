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
                <img class="w-[180px] h-[180px] rounded-full" src="https://via.placeholder.com/180x180" />
            </div>
            <p class="text-zinc-600 text-base font-normal text-center mt-6"> Teknik Informatika - 2021</p>
            <p class="text-black text-2xl font-bold text-center mt-2"> Anda Bagas Aprianto</p>
            <p class="text-zinc-600 text-base font-normal text-center mt-2"> andabagas@email.com</p>
            <div class="flex justify-center items-center gap-2 mt-2">
                <p class="tag   text-xs text-center font-semibold py-1 px-2 bg-blue-100 text-blue-300 rounded-full">
                    UI/UX</p>
                <p class="tag text-xs text-center font-semibold py-1 px-2 bg-blue-100 text-blue-300 rounded-full">BC/BIC
                </p>
                <p class="tag text-xs text-center font-semibold py-1 px-2 bg-blue-100 text-blue-300 rounded-full">CTF
                </p>
            </div>
        </div>
        <!-- main top -->
        <!-- main bot -->

        <div>
            <div class="container">
                <div class="grid grid-cols-2 gap-4 mt-12 ">
                    <div class="p-6  rounded-2xl border-2 grid-cols-1 h-max ">
                        <h3 class="text-black text-2xl font-bold mb-8">Tentang Saya</h3>
                        <p>Lorem ipsum dolor sit amet consectetur. Placerat velit nulla ipsum amet sit. Massa neque
                            aliquam eget viverra
                            suspendisse. Eu elementum parturient maecenas sit ultrices cursus integer sit phasellus.
                            Tincidunt laoreet id velit
                            viverra massa suscipit tellus. Etiam sagittis porttitor neque accumsan a at fusce.
                            Vestibulum malesuada eget sed massa</p>
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
                                <p class="text-zinc-600 text-base font-normal">0812345567</p>
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
                                <p class="text-zinc-600 text-base font-normal">@anda.bagas_</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-6">
                            <div
                                class="w-12 h-12 p-3 bg-violet-100 rounded-lg justify-center items-center gap-2.5 inline-flex">
                                <img src="{{ asset('assets/images/mdi_linkedin.svg') }}" class="w-6 h-6" alt="">
                            </div>
                            <div>
                                <h4 class="text-black text-lg font-bold">LinkedIn</h4>
                                <p class="text-zinc-600 text-base font-normal">Anda Bagas Aprianto</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center my-12">
            <button class="flex mr-2 grow-0  self-center justify-center w-[40%] h-12  btn-primary-normal"><img
                    src="asset/file-text-fill.svg" alt="" class="w-4 h-4 self-center hidden "><span
                    class="text-sm self-center">
                    Edit Profile</span></button>

        </div>
        <!-- main bot -->
    </section>
    <!-- Main -->
</main>

@endsection
