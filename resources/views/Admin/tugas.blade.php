@extends('template.layout')

@section('title', 'Tugas')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
    @endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">🚙 Tugas</h2>
                    <a href="{{ route('tugas.create') }}" class="btn btn-primary">➕ Tambah Tugas</a>
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

                        <div class="table-responsive">
                            @isset($tugas)
                                @if ($tugas->isEmpty())
                                    <div class="text-center py-8">
                                        <i class="fas fa-users-slash text-4xl text-gray-400 mb-4"></i>
                                        <p class="text-gray-600">Belum ada data tugas</p>
                                    </div>
                                @else
                                    <table class="table table-striped table-hover align-middle mb-0">
                                        <thead class="table-dark">
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 25%;">Nama Tugas</th>
                                                <th style="width: 30%;">Deskripsi Tugas</th>
                                                <th style="width: 20%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tugas as $index => $tugass)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $tugass->nama_tugas }}</td>
                                                    <td>{{ $tugass->deskripsi_tugas }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <a href="{{ route('tugas.edit', ['id' => $tugass->id_tugas]) }}"
                                                                    class="btn btn-sm btn-warning w-100"><i
                                                                        class="fas fa-edit"></i>Edit</a>
                                                            </div>
                                                            <form action="{{ route('tugas.delete', $tugass->id_tugas) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger w-100">
                                                                    <i class="fas fa-trash"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                @endif
                            @else
                                <div class="text-center py-8">
                                    <i class="fas fa-exclamation-triangle text-4xl text-yellow-400 mb-4"></i>
                                    <p class="text-gray-600">Data tidak tersedia</p>
                                </div>
                            @endisset

                            @if (isset($tugas) && $tugas->hasPages())
                                <div class="mt-4">
                                    {{ $tugas->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
