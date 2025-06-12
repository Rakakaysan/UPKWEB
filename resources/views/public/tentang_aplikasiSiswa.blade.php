@extends('template.sidebar_siswa')

@section('title', 'Tentang Aplikasi')

@section('main')
<div id="layoutSidenav">
  <!-- Sidebar -->
  <div id="layoutSidenav_nav">
    @include('template.sidebar_admin')
  </div>
@endsection 
  <!-- Konten Utama -->
  <div id="layoutSidenav_content" style="padding-left: 25%;">
    <main class="bg-[#d1a19a] min-h-screen p-6 md:p-10">
      <div class="flex flex-col md:flex-row md:space-x-8 max-w-6xl mx-auto">
        
        <!-- Deskripsi Aplikasi -->
        <div class="md:w-2/3 flex flex-col justify-between text-sm leading-relaxed mb-6 max-w-xl">
          <h1 class="fredoka text-3xl font-bold mb-4 drop-shadow-[2px_2px_0_rgba(0,0,0,1)]">
            Tentang Aplikasi & Pengembang
          </h1>
          <p class="mb-3">
            <strong>Simba</strong> adalah aplikasi pembelajaran interaktif yang dikembangkan untuk
            memperkenalkan dan memperdalam pemahaman siswa mengenai candi-candi di Indonesia. 
            Dirancang dengan tampilan modern dan ramah pengguna, Simba menyajikan materi edukatif 
            secara visual dan menarik, sehingga mudah dipahami oleh pelajar dari berbagai jenjang.
          </p>
          <p class="mb-3 font-medium">
            • Fitur Utama:<br />
            ✅ <strong>Materi</strong> – Informasi lengkap tentang berbagai candi di Indonesia.<br />
            ✅ <strong>Gambar & Ilustrasi</strong> – Visualisasi menarik untuk memperjelas struktur dan detail candi.<br />
            ✅ <strong>Quiz & Evaluasi</strong> – Uji pemahaman melalui soal interaktif.
          </p>
          <p class="mb-4">
            Dengan Simba, belajar tentang candi menjadi lebih menyenangkan, interaktif, dan mudah dipahami.
          </p>
          <ul class="list-disc list-inside text-sm">
            <li>Raka Kaysan Nawfal</li>
            <li>Rado Da Silva</li>
            <li>Hedwig Mariane Avatar</li>
            <li>Wawa Zahra Chika</li>
            <li>Intan Dwi P</li>
          </ul>
        </div>

        <!-- Gambar Grup -->
<!-- Gambar Grup -->
<div class="md:w-1/3 flex justify-center items-start mt-6 md:mt-0">
  <img src="{{ asset('img/nur.jpg') }}" 
       alt="Group photo"
       class="rounded-3xl object-cover w-full max-w-xs md:max-w-sm" />
</div>

      </div>
    </main>
  </div>
</div>


@push('styles')
<style>
  #layoutSidenav {
    display: flex;
  }
  #layoutSidenav_nav {
    width: 225px;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 1038;
    overflow-x: hidden;
    box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
    background-color: #fff;
  }
  #layoutSidenav_content {
    margin-left: 225px;
    flex: 1;
    width: calc(100% - 225px);
  }
</style>
@endpush
