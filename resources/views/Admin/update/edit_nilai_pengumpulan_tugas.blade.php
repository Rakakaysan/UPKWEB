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
                    <h2 class="mb-0">🚓 Penilaian Tugas</h2>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pengumpulan_tugas.nilai', ['id' => $pengumpulan->id_pengumpulan]) }}"
                            method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Soal Tugas</label>
                                <textarea disabled rows="4" class="form-control">{{ $pengumpulan->tugas->deskripsi_tugas }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jawaban Siswa</label>
                                <textarea disabled rows="4" class="form-control">{{ $pengumpulan->jawaban_tugas }}</textarea>
                            </div>

                            @if ($pengumpulan->nilai)
                                <div class="mb-3">
                                    <label for="nilai" class="form-label">Nilai</label>
                                    <input value="{{ $pengumpulan->nilai }}" type="number" name="nilai"
                                        id="nilai" class="form-control" placeholder="0-100" required>
                                </div>
                            @else
                                <div class="mb-3">
                                    <label for="nilai" class="form-label">Nilai</label>
                                    <input type="number" name="nilai" id="nilai" class="form-control"
                                        placeholder="0-100" required>
                                </div>
                            @endif


                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">💾 Simpan</button>
                                <a href="{{ route('pengumpulan_tugas.index') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
