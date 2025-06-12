<!DOCTYPE html>
@php
    $currentDate = now()->format('l d, M Y');
    $userName = 'Amma Harun';
    $userAvatar = 'https://storage.googleapis.com/a1aa/image/a324d02d-1b3b-46ea-57c5-b3f21cdebb64.jpg';
    $pageTitle = 'Edit Materi';

    // Simulasi data materi untuk diedit
    $materi = [
        'judul' => 'Pengantar Pemrograman',
        'kategori' => 'Teknologi Informasi',
        'deskripsi' => 'Materi ini membahas dasar-dasar pemrograman.',
        'video' => 'https://youtu.be/contohvideo',
        'status' => 'published'
    ];
@endphp

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>{{ $pageTitle }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body { font-family: serif; }
    </style>
</head>
<body class="bg-[#bca49a] min-h-screen flex items-center justify-center p-4">
    <div class="max-w-[900px] w-full flex flex-col md:flex-row gap-8 bg-[#d9c9c1] rounded-3xl p-6 md:p-10 shadow-[8px_8px_10px_#a88a7f] select-none">
        <!-- Sidebar -->
        <aside class="flex flex-col items-center bg-[#e6dbd5] rounded-3xl p-6 w-full max-w-[220px] shadow-[8px_8px_10px_#a88a7f]">
            <img alt="User avatar" class="w-[100px] h-[100px] rounded-full mb-2" src="{{ $userAvatar }}" />
            <p class="text-[10px] text-center text-[#4a3f3a] mb-6 font-light">
                {{ $userName }}<br/>{{ $currentDate }}
            </p>
            <h2 class="text-[#4a3f3a] font-serif font-semibold mb-4 text-lg">Menu Admin</h2>
            <nav class="flex flex-col gap-4 w-full text-[#4a3f3a] text-xs font-light">
                <a class="flex items-center gap-2 hover:text-black transition-colors duration-200" href="#"><i class="fas fa-desktop text-lg"></i><span>Manajemen Pengguna</span></a>
                <a class="flex items-center gap-2 hover:text-black transition-colors duration-200 font-bold" href="#"><i class="fas fa-list-alt text-lg"></i><span>Materi Pembelajaran</span></a>
                <a class="flex items-center gap-2 hover:text-black transition-colors duration-200" href="#"><i class="fas fa-users text-lg"></i><span>Informasi Pengguna</span></a>
                <a class="flex items-center gap-2 hover:text-black transition-colors duration-200" href="#"><i class="fas fa-cog text-lg"></i><span>Pengaturan Sistem</span></a>
                <a class="flex items-center gap-2 hover:text-black transition-colors duration-200" href="#"><i class="fas fa-th-large text-lg"></i><span>Tentang Aplikasi</span></a>
            </nav>
            <div class="mt-auto pt-6 w-full border-t border-[#c9b9b1]">
                <a class="flex items-center gap-2 text-[#4a3f3a] text-[10px] font-light hover:text-black transition-colors duration-200" href="#"><i class="fas fa-sign-out-alt text-xs"></i><span>Logout</span></a>
            </div>
        </aside>

        <!-- Main content -->
        <main class="flex-1">
            <h1 class="text-4xl font-extrabold text-black drop-shadow-[2px_2px_2px_rgba(0,0,0,0.5)] mb-6 leading-[1.1]">
                Edit<br/>Materi
            </h1>

            <section class="bg-[#e6dbd5] rounded-3xl p-6 md:p-10 shadow-[8px_8px_10px_#a88a7f] text-[10px] text-[#4a3f3a] font-light max-w-full">
                <div class="mb-4">
                    <p class="font-bold text-[11px] mb-0.5">Materi Info:</p>
                    <p class="mb-4">Perbarui data materi di bawah ini</p>
                </div>

                <form class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4 max-w-full">
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold text-[9px]" for="judul">Judul Materi</label>
                        <input class="bg-[#f3ede9] rounded-full py-1 px-3 text-[9px] text-[#a89f9a] focus:outline-none" id="judul" type="text" value="{{ $materi['judul'] }}"/>
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold text-[9px]" for="kategori">Kategori</label>
                        <input class="bg-[#f3ede9] rounded-full py-1 px-3 text-[9px] text-[#a89f9a] focus:outline-none" id="kategori" type="text" value="{{ $materi['kategori'] }}"/>
                    </div>
                    <div class="flex flex-col sm:col-span-2">
                        <label class="mb-1 font-semibold text-[9px]" for="deskripsi">Deskripsi</label>
                        <textarea class="bg-[#f3ede9] rounded-2xl py-2 px-3 text-[9px] text-[#a89f9a] focus:outline-none resize-none h-24" id="deskripsi">{{ $materi['deskripsi'] }}</textarea>
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold text-[9px]" for="video">Tautan Video (Opsional)</label>
                        <input class="bg-[#f3ede9] rounded-full py-1 px-3 text-[9px] text-[#a89f9a] focus:outline-none" id="video" type="text" value="{{ $materi['video'] }}"/>
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold text-[9px]" for="file">Ganti File Materi (Jika Ada)</label>
                        <input class="text-[9px]" id="file" type="file"/>
                    </div>
                    <div class="flex flex-col">
                        <label class="mb-1 font-semibold text-[9px]" for="status">Status Publikasi</label>
                        <select id="status" class="bg-[#f3ede9] rounded-full py-1 px-3 text-[9px] text-[#a89f9a] focus:outline-none">
                            <option value="draft" {{ $materi['status'] === 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ $materi['status'] === 'published' ? 'selected' : '' }}>Publik</option>
                        </select>
                    </div>
                    <div class="col-span-full flex gap-4 mt-4">
                        <button class="bg-[#7a6a9a] text-white text-[10px] font-light rounded-full py-1.5 px-6" type="submit">Update</button>
                        <button class="bg-[#d9c9c1] text-[#4a3f3a] text-[10px] font-light rounded-full py-1.5 px-6 border border-[#a89f9a]" type="button">Batal</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
