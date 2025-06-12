@extends('template.layout')

@section('title', 'Tambah Tugas')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
    @endsection

    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">🚙 Edit Tugas</h2>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('tugas.update', ['id' => $tugas->id_tugas]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="nama_tugas" class="form-label">Nama Tugas</label>
                                <input value="{{ $tugas->nama_tugas }}" type="text" name="nama_tugas" id="nama_tugas"
                                    name="nama_tugas" class="form-control" placeholder="Masukkan judul tugas" required>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi_tugas" class="form-label">Deskripsi Tugas</label>
                                <textarea name="deskripsi_tugas" id="deskripsi_tugas" rows="4" class="form-control"
                                    placeholder="Masukkan deskripsi tugas..." required>{{ $tugas->deskripsi_tugas }}</textarea>
                            </div>

                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">💾 Simpan</button>
                                <a href="{{ route('tugas.index') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
