@extends('template.layout')

@section('title', 'Manajemen Pengguna')

@section('main')
<div id="layoutSidenav">
    @include('template.sidebar_admin')

    <div id="layoutSidenav_content">
        <main class="container-fluid px-4 mt-4">
            <h2 class="mb-4">👥 Manajemen Pengguna</h2>

            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengguna as $i => $user)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $user->nama_lengkap }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->jabatan }}</td>
                                <td>
                                    <span class="badge bg-{{ $user->status == 'Aktif' ? 'success' : 'secondary' }}">
                                        {{ $user->status }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.pengguna.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.pengguna.destroy', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Hapus pengguna ini?')" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @if(count($pengguna) === 0)
                            <tr>
                                <td colspan="7" class="text-center text-muted">Tidak ada data pengguna.</td>
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
