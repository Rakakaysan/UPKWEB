@extends('template.layout')

@section('title', 'Tambah Materi Pembelajaran')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
    @endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">📚 Tambah Materi Pembelajaran</h2>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('materi_pembelajaran.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Materi</label>
                                <input type="text" name="nama_materi" id="judul" class="form-control"
                                    placeholder="Masukkan judul materi" required>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Konten Materi</label>
                                <textarea name="konten_materi" id="deskripsi" rows="4" class="form-control"
                                    placeholder="Masukkan deskripsi materi..." required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tautan_video" class="form-label">Tautan Video</label>
                                <input type="url" name="url_youtube" id="tautan_video" class="form-control"
                                    placeholder="https://youtube.com/..." required>
                            </div>

                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">💾 Simpan</button>
                                <a href="{{ route('materi_pembelajaran.index') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
