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
            <form action="{{ route('profile.update', ['id' => $mahasiswa->mahasiswa_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex justify-center">
                @if($mahasiswa->photo == null)
                <img class="w-[180px] h-[180px] rounded-full" src="https://via.placeholder.com/180x180" />
                @else
                <img class="object-cover w-[180px] h-[180px] rounded-full" src="{{ Storage::url($mahasiswa->photo) }}" />
                @endif
                <input type="file" name="photo" id="photo">
            </div>
        </div>
        <div>
            <div class="container">
                <div class="grid grid-cols-2 gap-4 mt-12 ">
                        <div class="p-6  rounded-2xl border-2 grid-cols-1 h-max flex flex-col gap-6  ">
                            <h3 class="text-black text-2xl font-bold ">Tentang Saya</h3>
                                <div>
                                    <label for="name" class="text-black text-base font-semibold ">Nama</label>
                                    <input type="text" name="nama" id="nama" value="{{ $guest->name }}"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                </div>
                                <div>
                                    <label for="email" class="text-black text-base font-semibold ">Email</label>
                                    <input type="email" name="email" id="email" value="{{ $guest->email }}"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                </div>
                                <div>
                                    <label for="nim" class="text-black text-base font-semibold ">NIM</label>
                                    <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <label for="prodi" class="text-black text-base font-semibold ">Program
                                            Studi</label>
                                        <input type="text" name="prodi" id="prodi" value="{{ $mahasiswa->prodi }}"
                                            class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                    </div>
                                    <div>
                                        <label for="angkatan" class="text-black text-base font-semibold ">Angkatan</label>
                                        <input type="text" name="angkatan" id="angkatan" value="{{ $mahasiswa->angkatan }}"
                                            class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                    </div>
                                </div>
                                <div>
                                    <label for="name" class="text-black text-base font-semibold ">Keminatan</label>
                                    <div>
                                        @foreach($categories as $category)
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="categories[]" id="category{{ $category->category_id }}" value="{{ $category->category_id }}" @if(in_array($category->category_id, 
                                            $mahasiswa->MahasiswaCategory->pluck('category_id')->toArray())) checked @endif>
                                            <span class="ml-2">{{ $category->name }}</span>
                                        </label>
                                        @endforeach
                                    </div>
                                </div>
                                <div>
                                    <label for="description" class="text-black text-base font-semibold ">Tentang Diri</label>
                                    <textarea name="description" id="description" cols="20" rows="5"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">{{ $mahasiswa->description }}</textarea>


                                </div>
                        </div>
                        <div class="p-6 flex flex-col gap-6 rounded-2xl border-2 grid-cols-1 h-max">
                            <h3 class="text-black text-2xl font-bold ">Tentang Saya</h3>
                                <div>
                                    <label for="no_tlp" class="text-black text-base font-semibold ">Nomor Whatsapp</label>
                                    <input type="text" name="no_tlp" id="no_tlp"
                                        placeholder="(+62)" value="{{ $mahasiswa->no_tlp }}"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex" />

                                </div>
                                <div>
                                    <label for="acc_instagram" class="text-black text-base font-semibold ">Instagram</label>
                                    <input type="text" name="acc_instagram" id="acc_instagram" value="{{ $mahasiswa->acc_instagram }}"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                </div>
                                <div>
                                    <label for="acc_linkedin" class="text-black text-base font-semibold ">LinkedIn</label>
                                    <input type="text" name="acc_linkedin" id="acc_linkedin" value="{{ $mahasiswa->acc_linkedin }}"
                                        class="w-full px-6 py-3 rounded-lg mt-1 border border-zinc-200 justify-start items-center gap-2 inline-flex">
                                </div>
                        </div>
                        <div class="flex justify-center my-12">
                            <button type="submit" class="flex mr-2 grow-0  self-center justify-center w-[40%] h-12  btn-primary-normal">
                                    Simpan Perubahan</button>
                        </div>
                </div>
            </form>
            </div>
        </div>


    </section>
    <!-- Main -->

</main>
@endsection
