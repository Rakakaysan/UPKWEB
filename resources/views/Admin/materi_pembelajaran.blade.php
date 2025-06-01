@extends('template.layout')

@section('title', 'Materi Pembelajaran')

@section('main')
<div id="layoutSidenav">
    @include('template.sidebar_admin')

    <div id="layoutSidenav_content">
        <main class="container-fluid px-4 mt-4">
            <h2 class="mb-4">📘 Materi Pembelajaran</h2>

            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Materi</th>
                                <th>Deskripsi</th>
                                <th>URL YouTube</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materi as $i => $item)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $item->nama_materi }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($item->konten_materi, 80, '...') }}</td>
                                <td>
                                    @if ($item->url_youtube)
                                        <a href="{{ $item->url_youtube }}" target="_blank" class="btn btn-sm btn-primary">Tonton Video</a>
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.materi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.materi.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Hapus materi ini?')" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @if(count($materi) === 0)
                            <tr>
                                <td colspan="5" class="text-center text-muted">Tidak ada data materi pembelajaran.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
