@extends('users.layouts.main', ['page' => 'profile-edit'])

@section('title', 'Edit Profile')

@section('content')
<main>
    <!-- Main -->
    <section class="w-full  items-center mt-6 justify-between container mx-auto">
        <a href="/" class="w-fit btn-secondary-small absolute top-24 flex gap-1 items-center">
            <x-phosphor-caret-left class="w-5 h-5" />
            <p>Kembali</p>
        </a>
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

        </div>
        <div>
            <div class="container">
                <div class="grid grid-cols-2 gap-4 mt-12 ">
                    <div class="p-6  rounded-2xl border-2 grid-cols-1 h-max flex flex-col gap-6  ">
                        <h3 class="text-black text-2xl font-bold ">Tentang Saya</h3>
                        <form action="" class="flex gap-6 flex-col">
                            <div>
                                <label for="name" class="text-black text-base font-semibold ">Nama</label>
                                <input type="text" name="nama" id="nama"
                                    class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                            </div>
                            <div>
                                <label for="email" class="text-black text-base font-semibold ">Email</label>
                                <input type="email" name="email" id="email"
                                    class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label for="progstud" class="text-black text-base font-semibold ">Program
                                        Studi</label>
                                    <input type="text" name="progstud" id="progstud"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                </div>
                                <div>
                                    <label for="angkatan" class="text-black text-base font-semibold ">Angkatan</label>
                                    <input type="text" name="angkatan" id="angkatan"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                </div>
                            </div>
                            <div>
                                <label for="name" class="text-black text-base font-semibold ">Keminatan</label>
                                <select name="" id=""
                                    class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                    <option value="">UI/UX</option>
                                    <option value="">BC/BIC</option>
                                    <option value="">Software Development</option>
                                    <option value="">Poster</option>
                                    <option value="">Essay</option>
                                    <option value="">Debat</option>

                                </select>

                            </div>
                            <div>
                                <label for="desc" class="text-black text-base font-semibold ">Tentang Diri</label>
                                <textarea name="desc" id="desc" cols="20" rows="5"
                                    class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex"></textarea>


                            </div>
                        </form>
                    </div>
                    <div class="p-6 flex flex-col gap-6 rounded-2xl border-2 grid-cols-1 h-max">
                        <h3 class="text-black text-2xl font-bold ">Tentang Saya</h3>
                        <form action="" class="flex gap-6 flex-col">
                            <div>
                                <label for="tel" class="text-black text-base font-semibold ">Nomor Whatsapp</label>
                                <input type="tel" pattern="\(\d\d\d\d\)-\d\d\d\d\d\d\d\d" name="tel"
                                    placeholder="(+62)" required
                                    class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex" />

                            </div>
                            <div>
                                <label for="ig" class="text-black text-base font-semibold ">Instagram</label>
                                <input type="text" name="ig" id="ig"
                                    class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                            </div>
                            <div>
                                <label for="linkedin" class="text-black text-base font-semibold ">LinkedIn</label>
                                <input type="text" name="linkedin" id="linkedin"
                                    class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
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
    </section>
    <!-- Main -->

</main>
@endsection
