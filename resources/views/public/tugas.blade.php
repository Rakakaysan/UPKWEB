<!-- resources/views/siswa/tugas.blade.php -->

@extends('layouts.siswa')

@section('content')
<div class="p-8">
  <h1 class="text-3xl font-semibold text-[#5C1D0E] mb-1">List Daftar Tugas Siswa</h1>
  <p class="text-sm text-gray-700 mb-6">Senin 17 Februari 2025</p>

  <div class="flex gap-6">
    <div class="flex-1 space-y-6">
      <!-- Kartu Tugas 1 -->
      <div class="bg-white rounded-2xl shadow-md p-4 border-l-8 border-red-500">
        <h2 class="text-lg font-bold text-[#3A1008]">Mempelajari Sejarah Candi Borobudur</h2>
        <p class="text-sm text-gray-700">Deskripsi: Baca materi tentang sejarah Candi Borobudur dan buat ringkasan.</p>
        <div class="mt-2 flex justify-between items-center">
          <span class="text-sm text-red-500 font-semibold">Status: Belum Selesai</span>
          <button class="bg-red-500 text-white text-sm px-3 py-1 rounded-xl">Tandai Selesai</button>
        </div>
      </div>

      <!-- Kartu Tugas 2 -->
      <div class="bg-white rounded-2xl shadow-md p-4 border-l-8 border-green-500">
        <h2 class="text-lg font-bold text-[#3A1008]">Menyelesaikan Soal Candi Prambanan</h2>
        <p class="text-sm text-gray-700">Deskripsi: Kerjakan soal tentang Candi Prambanan yang ada di halaman 30 buku.</p>
        <div class="mt-2 flex justify-between items-center">
          <span class="text-sm text-green-600 font-semibold">Status: Selesai</span>
          <button class="bg-green-600 text-white text-sm px-3 py-1 rounded-xl">Tandai Selesai</button>
        </div>
      </div>
    </div>

    <!-- Sidebar jumlah tugas -->
    <div class="bg-white rounded-2xl shadow-md w-36 h-fit p-4 flex flex-col justify-center items-center">
      <span class="text-3xl font-bold text-green-700">90</span>
      <span class="text-sm text-gray-600 text-center">Tugas selesai</span>
    </div>
  </div>
</div>
@endsection
