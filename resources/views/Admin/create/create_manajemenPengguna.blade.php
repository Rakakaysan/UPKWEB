@extends('template.layout')

@section('title', 'Manajemen Pengguna')

@section('main')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<div id="layoutSidenav">
    @include('template.sidebar_admin')
@endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">


        <!-- Main Content -->
        <main class="w-full md:w-[80%] p-8">
                    <!-- Notifikasi -->
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif

            <h1 class="text-4xl font-extrabold text-black drop-shadow mb-6 leading-tight">
                Manajemen<br />Pengguna
            </h1>

            <section class="bg-[#e6dbd5] rounded-3xl p-6 shadow-lg text-sm text-[#4a3f3a] max-w-full">
                <div class="mb-4">
                    <p class="font-bold mb-1">Account Info:</p>
                    <p>Personal Information</p>
                </div>

                <form class="grid grid-cols-1 sm:grid-cols-2 gap-6" method="POST" action="{{ route('create') }}">
                    @csrf
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="nama_lengkap">Nama Lengkap</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" 
                            value="{{ old('nama_lengkap') }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="nip">NISN</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="nisn" name="nisn" placeholder="NISN" type="text" 
                            value="{{ old('nisn') }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="username">Username</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="username" name="username" placeholder="username" type="text" 
                            value="{{ old('username') }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="jabatan">Jabatan</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="jabatan" name="jabatan" placeholder="Jabatan" type="text" 
                            value="{{ old('jabatan') }}" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="password">Password</label>
                        <input class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="password" name="password" placeholder="Password" type="password" required />
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold" for="status">Status</label>
                        <select class="bg-[#f3ede9] rounded-full py-2 px-4 text-sm text-[#4a3f3a] focus:outline-none" 
                            id="status" name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ old('status') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="col-span-full flex gap-4 mt-6">
                        <button class="bg-[#7a6a9a] text-white text-sm rounded-full py-2 px-6" type="submit">Save</button>
                        <button class="bg-[#d9c9c1] text-[#4a3f3a] border border-[#a89f9a] text-sm rounded-full py-2 px-6" 
                            type="button" onclick="window.history.back()">Cancel</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</div>
