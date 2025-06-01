@extends('template.layout')

@section('title', 'Tentang Aplikasi')

@section('main')
<div id="layoutSidenav">
    @include('template.sidebar_admin')

    <div id="layoutSidenav_content">
        <main class="container-fluid px-4 mt-4">
            <h2 class="mb-4 text-center">ℹ️ Tentang Aplikasi Simba</h2>

            <div class="card shadow-sm p-4">
                <p>
                    <strong>Simba</strong> adalah aplikasi pembelajaran interaktif yang dirancang untuk mengenalkan dan memperdalam pemahaman tentang <strong>candi di Indonesia</strong>. 
                    Dengan tampilan yang modern dan user-friendly, Simba menyajikan berbagai materi edukatif mengenai pengertian, ciri-ciri, jenis-jenis, fungsi dan contoh candi dalam bentuk yang menarik dan mudah dipahami.
                </p>

                <h5 class="mt-4">🎯 Fungsi Utama:</h5>
                <ul class="list-unstyled ps-3">
                    <li>✅ <strong>Materi:</strong> Informasi mendalam tentang berbagai candi di Indonesia.</li>
                    <li>✅ <strong>Gambar Ilustrasi:</strong> Visualisasi menarik untuk memahami struktur dan sejarah candi.</li>
                    <li>✅ <strong>Quiz Evaluasi:</strong> Uji pemahaman dengan soal interaktif berbasis materi.</li>
                </ul>

                <p class="mt-3">
                    Dengan <strong>Simba</strong>, belajar sejarah dan budaya Indonesia menjadi lebih menyenangkan, visual, dan interaktif.
                </p>
            </div>
        </main>
    </div>
</div>
@endsection
