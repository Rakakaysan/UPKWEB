@extends('template.layout')

@section('title', 'Tugas Pembelajaran')

@section('main')
<div id="layoutSidenav">
    @include('template.sidebar_admin')
@endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">📝 Tugas Pembelajaran</h2>
                    <a href="{{ route('CreatePengumpulanTugas') }}"" class="btn btn-primary">➕ Tambah Tugas</a>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 30%;">Nama Tugas</th>
                                        <th style="width: 45%;">Deskripsi</th>
                                        <th style="width: 20%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tugas 1: Ringkasan Materi candi borobudur</td>
                                        <td>Candi Borobudur adalah candi Buddha terbesar di dunia, terletak di Magelang, Jawa Tengah. Dibangun pada abad ke-8 dan ke-9 oleh dinasti Syailendra. Diperkirakan sebagai tempat ibadah dan meditasi bagi umat Buddha.</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-sm btn-warning w-100">Edit</a>
                                                <button class="btn btn-sm btn-danger w-100" onclick="return confirm('Hapus tugas ini?')">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris contoh lainnya di sini jika dibutuhkan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    <div/>
</div>
