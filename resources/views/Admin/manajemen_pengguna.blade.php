@extends('template.layout')

@section('title', 'Manajemen Pengguna')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
    @endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">🚗 Manajemen Pengguna</h2>
                    <a href="{{ route('manajemen_pengguna.create') }}" class="btn btn-primary">➕ Tambah Pengguna</a>
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
                            @isset($pengguna)
                                @if ($pengguna->isEmpty())
                                    <div class="text-center py-8">
                                        <i class="fas fa-users-slash text-4xl text-gray-400 mb-4"></i>
                                        <p class="text-gray-600">Belum ada data pengguna</p>
                                    </div>
                                @else
                                    <table class="table table-striped table-hover align-middle mb-0">
                                        <thead class="table-dark">
                                            <tr>
                                                <th style="width: 5%;">No</th>
                                                <th style="width: 18%;">Nama Lengkap</th>
                                                <th style="width: 12%;">Username</th>
                                                <th style="width: 15%;">Jabatan</th>
                                                <th style="width: 10%;">Status</th>
                                                <th style="width: 20%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengguna as $index => $user)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $user->nama_lengkap }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->jabatan }}</td>
                                                    <td>
                                                        <span
                                                            class="badge {{ $user->status == 'Aktif' ? 'bg-success' : 'bg-danger' }}">
                                                            {{ $user->status }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <a href="{{ route('manajemen_pengguna.edit', ['id' => $user->id]) }}"
                                                                    class="btn btn-sm btn-warning">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a>
                                                            </div>
                                                            <form
                                                                action="{{ route('manajemen_pengguna.delete', ['id' => $user->id]) }}"
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
                                        </tbody>
                                    </table>
                                @endif
                            @else
                                <div class="text-center py-8">
                                    <i class="fas fa-exclamation-triangle text-4xl text-yellow-400 mb-4"></i>
                                    <p class="text-gray-600">Data tidak tersedia</p>
                                </div>
                            @endisset

                            @if (isset($pengguna) && $pengguna->hasPages())
                                <div class="mt-4">
                                    {{ $pengguna->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
