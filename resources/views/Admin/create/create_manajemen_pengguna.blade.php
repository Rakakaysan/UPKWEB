@extends('template.layout')

@section('title', 'Tambah Pengguna')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
    @endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">🚗 Tambah Pengguna</h2>
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

                        <form class="grid grid-cols-1 sm:grid-cols-2 gap-6" method="POST"
                            action="{{ route('manajemen_pengguna.store') }}">
                            @method('POST')
                            @csrf
                            <div class="mb-3">
                                <label class="mb-1 font-semibold" for="nama_lengkap">Nama Lengkap</label>
                                <input class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    placeholder="Nama Lengkap" type="text" required />
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 font-semibold" for="nip">NISN</label>
                                <input class="form-control" id="nisn" name="nisn" placeholder="NISN"
                                    type="text" required />
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 font-semibold" for="username">Username</label>
                                <input class="form-control" id="username" name="username" placeholder="username"
                                    type="text" required />
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 font-semibold" for="jabatan">Jabatan</label>
                                <input class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan"
                                    type="text" />
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 font-semibold" for="password">Password</label>
                                <input class="form-control" id="password" name="password" placeholder="Password"
                                    type="password" required />
                            </div>
                            <div class="mb-3">
                                <label class="mb-1 font-semibold" for="status">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif
                                    </option>
                                    <option value="Tidak Aktif" {{ old('status') == 'Tidak Aktif' ? 'selected' : '' }}>
                                        Tidak
                                        Aktif</option>
                                </select>
                            </div>
                            <div class="d-flex gap-3">
                                <button class="btn btn-primary" type="submit">💾Simpan</button>
                                <a href="{{ route('manajemen_pengguna.index') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
