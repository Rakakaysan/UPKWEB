@extends('template.layout')

@section('title', 'Edit Pengguna')

@section('main')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<div id="layoutSidenav">
    @include('template.sidebar_admin')

    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="w-full md:w-[80%] p-8">
            <h1 class="text-4xl font-extrabold text-black drop-shadow mb-6 leading-tight">
                Edit<br />Pengguna
            </h1>

            <section class="bg-[#e6dbd5] rounded-3xl p-6 shadow-lg text-sm text-[#4a3f3a] max-w-full">
                <div class="mb-4">
                    <p class="font-bold mb-1">Account Info:</p>
                    <p>Update User Information</p>
                </div>

                <form class="grid grid-cols-1 sm:grid-cols-2 gap-6" method="POST" 
                    action="{{ route('manajemen-pengguna.update', $pengguna->manajemen_id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="nama_lengkap">Nama Lengkap</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="nama_lengkap" name="nama_lengkap" type="text" 
                            value="{{ old('nama_lengkap', $pengguna->nama_lengkap) }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="nisn">NISN</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="nisn" name="nisn" type="text" 
                            value="{{ old('nisn', $pengguna->nisn) }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="username">Username</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="username" name="username" type="text" 
                            value="{{ old('username', $pengguna->username) }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="jabatan">Jabatan</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="jabatan" name="jabatan" type="text" 
                            value="{{ old('jabatan', $pengguna->jabatan) }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="password">Password <small>(Kosongkan jika tidak ingin mengubah)</small></label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="password" name="password" placeholder="Password baru" type="password" />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="password_confirmation">Konfirmasi Password</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="password_confirmation" name="password_confirmation" placeholder="Ulangi password baru" type="password" />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="status">Status</label>
                        <select class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="status" name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="Aktif" {{ old('status', $pengguna->status) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ old('status', $pengguna->status) == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="col-span-full flex gap-4 mt-6">
                        <button class="bg-[#7a6a9a] text-white text-sm rounded-full py-2 px-6" type="submit">Update</button>
                        <a href="{{ route('manajemen_pengguna') }}" 
                           class="bg-[#d9c9c1] text-[#4a3f3a] border border-[#a89f9a] text-sm rounded-full py-2 px-6 text-center">
                            Cancel
                        </a>
                    </div>
                </form>
                
                @if($errors->any())
                    <div class="mt-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </section>
        </main>
    </div>
</div>
@endsection