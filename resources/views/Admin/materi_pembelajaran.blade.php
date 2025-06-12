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
                            @isset($materi)
                                @if($materi->isEmpty())
                                    <div class="text-center py-8">
                                        <i class="fas fa-users-slash text-4xl text-gray-400 mb-4"></i>
                                        <p class="text-gray-600">Belum ada data pengguna</p>
                                    </div>
                                @else
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
                                            @foreach($materi as $index => $materis)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $materis->nama_materi }}</td>
                                                    <td>{{ $materis->konten_materi }}</td>
                                                    <td>
                                                        <a href="{{ $materis->url_youtube }}" target="_blank"
                                                            class="btn btn-sm btn-primary">Tonton Video</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="">
                                                                <a href="{{ route('materi.edit', ['id' => $materis->id_materi]) }}"
                                                                    class="btn btn-sm btn-warning w-100">Edit</a>
                                                            </div>
                                                            <form action="{{ route('materi.delete2', $materis->id_materi) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
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

                                            <!-- Tambahkan baris statis lainnya jika diperlukan -->
                                        </tbody>
                                    </table>
                                @endif
                            @else
                                <div class="text-center py-8">
                                    <i class="fas fa-exclamation-triangle text-4xl text-yellow-400 mb-4"></i>
                                    <p class="text-gray-600">Data tidak tersedia</p>
                                </div>
                            @endisset

                            {{-- @if(isset($materi) && $materi->hasPages())
                            <div class="mt-4">
                                {{ $materi->links() }}
                            </div>
                            @endif --}}

                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>