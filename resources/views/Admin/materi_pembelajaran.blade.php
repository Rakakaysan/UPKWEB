@extends('template.layout')

@section('title', 'Materi Pembelajaran')

@section('main')
<div id="layoutSidenav">
    @include('template.sidebar_admin')
@endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">📘 Materi Pembelajaran</h2>
                    <a href="{{ route('CreateMateriPembelajaran') }}" class="btn btn-primary">➕ Tambah Materi</a>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 25%;">Nama Materi</th>
                                        <th style="width: 30%;">Deskripsi</th>
                                        <th style="width: 20%;">URL YouTube</th>
                                        <th style="width: 20%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pengetahuan Tentang Candi di Indonesia</td>
                                        <td>Candi di Indonesia adalah struktur bersejarah. Berikut adalah beberapa poin penting mengenai pengetahuan tentang candi di Indonesia:

                                            Sejarah dan Fungsi:

                                            1. Candi umumnya dibangun sebagai tempat ibadah, terutama dalam agama Hindu dan Buddha.
                                            2. Banyak candi yang juga berfungsi sebagai makam bagi raja atau tokoh penting.
                                               Arsitektur:</td>
                                        <td>
                                            <a href="#" target="_blank" class="btn btn-sm btn-primary">Tonton Video</a>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="btn btn-sm btn-warning w-100">Edit</a>
                                                <button class="btn btn-sm btn-danger w-100" onclick="return confirm('Hapus materi ini?')">Hapus</button>
                                            </div>
                                           </td>
                                    </tr>
                                    <!-- Tambahkan baris statis lainnya jika diperlukan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>

