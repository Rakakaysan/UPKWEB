@extends('template.layout')

@section('title', 'Kumpulin Tugas')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_siswa')
    @endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">🛻 Kumpulin Tugas</h2>
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


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('siswa.tugas.kumpulin', ['id' => $tugas->id_tugas]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="deskripsi_tugas" class="form-label">Soal</label>
                                <textarea name="deskripsi_tugas" id="deskripsi_tugas" rows="4" class="form-control" disabled required>{{ $tugas->deskripsi_tugas }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="jawaban_tugas" class="form-label">Jawaban</label>
                                <textarea name="jawaban_tugas" id="jawaban_tugas" rows="4" class="form-control"
                                    placeholder="Masukkan jawaban anda..." required></textarea>
                            </div>

                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">📝 Kumpulkan</button>
                                <a href="{{ route('siswa.tugas') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
