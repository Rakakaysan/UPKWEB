@extends('layouts.siswa')

@section('content')
<div class="p-6">
    <div class="bg-[#F5D9D2] p-6 rounded-3xl shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-4">Tentang Aplikasi & Pengembang</h1>
        <div class="flex flex-col lg:flex-row gap-6">
            <div class="flex flex-col items-center lg:w-1/3">
                <img src="{{ asset('images/mas_haris.png') }}" alt="Mas Haris" class="rounded-full w-36 h-36 object-cover mb-2 border-4 border-white shadow-md">
                <div class="text-center font-semibold">M. HARIS YAHYA</div>
            </div>
            <div class="lg:w-2/3 space-y-4">
                <p>
                    SIMBA adalah aplikasi pembelajaran interaktif yang dirancang untuk memperkenalkan dan memperdalam pemahaman tentang candi di Indonesia. 
                    Dengan tampilan yang modern dan interaktif, SIMBA mempermudah siswa dalam mengeksplor materi sejarah, ciri, jenis, dan fungsi candi 
                    berdasarkan budaya Hindu dan Buddha.
                </p>
                <ul class="list-disc list-inside space-y-1">
                    <li><strong>Materi</strong> – Informasi mendalam tentang berbagai candi di Indonesia</li>
                    <li><strong>Quiz & Evaluasi</strong> – Uji pemahaman siswa setelah mempelajari materi</li>
                    <li><strong>Gambar & Narasi</strong> – Visualisasi menarik untuk membantu pemahaman</li>
                </ul>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-xl font-semibold mb-2">Tim Pengembang:</h2>
            <img src="{{ asset('images/tim_pengembang.png') }}" alt="Tim Pengembang" class="rounded-xl shadow-md w-full max-w-lg mb-3">
            <ul class="list-disc list-inside pl-4">
                <li>Raka Kayaan Nawfal</li>
                <li>Rado Da Silva</li>
                <li>Hedwig Marianne Avatar</li>
                <li>Intan Dwi Pratiwi</li>
                <li>Wawa zahra chika Zaskia</li>
            </ul>
        </div>
    </div>
</div>
@endsection
