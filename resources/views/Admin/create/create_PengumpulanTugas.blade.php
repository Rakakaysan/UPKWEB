@extends('template.layout')

@section('title', 'Tambah Tugas Pembelajaran')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
@endsection

    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">📝 Tambah Tugas Pembelajaran</h2>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('tugas.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Tugas</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan nama tugas" required>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control"
                                    placeholder="Masukkan deskripsi tugas..." required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak_aktif">Tidak Aktif</option>
                                </select>
                            </div>

                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-success">💾 Simpan</button>
                                <a href="{{ route('tugas.index') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>