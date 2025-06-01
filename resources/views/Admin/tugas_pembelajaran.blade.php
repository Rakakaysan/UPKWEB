@extends('template.layout')

@section('title', 'Tugas Pembelajaran')

@section('main')
<div id="layoutSidenav">
    @include('template.sidebar_admin')

    <div id="layoutSidenav_content">
        <main class="container-fluid px-4 mt-4">
            <h2 class="mb-4">📝 Tugas Pembelajaran</h2>

            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Tugas</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tugas as $i => $item)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $item->nama_tugas }}</td>
                                <td>{{ $item->deskripsi ?? '(Tidak ada deskripsi)' }}</td>
                                <td>
                                    <a href="{{ route('admin.tugas.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.tugas.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Hapus tugas ini?')" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @if(count($tugas) === 0)
                            <tr>
                                <td colspan="4" class="text-center text-muted">Tidak ada data tugas pembelajaran.</td>
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
