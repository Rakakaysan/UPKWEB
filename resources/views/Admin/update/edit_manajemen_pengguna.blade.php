@extends('template.layout')

@section('title', 'Edit Pengguna')

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
    @endsection
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main class="py-4 px-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">🚗 Edit Pengguna</h2>
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

                        <form method="POST" action="{{ route('manajemen_pengguna.update', $pengguna->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                                    <input class="form-control" id="nama_lengkap" name="nama_lengkap" type="text"
                                        value="{{ old('nama_lengkap', $pengguna->nama_lengkap) }}" required />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="nisn">NISN</label>
                                    <input class="form-control" id="nisn" name="nisn" type="text"
                                        value="{{ old('nisn', $pengguna->nisn) }}" required />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input class="form-control" id="username" name="username" type="text"
                                        value="{{ old('username', $pengguna->username) }}" required />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="jabatan">Jabatan</label>
                                    <input class="form-control" id="jabatan" name="jabatan" type="text"
                                        value="{{ old('jabatan', $pengguna->jabatan) }}" required />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="password">Password <small
                                            class="text-muted">(Kosongkan jika tidak ingin mengubah)</small></label>
                                    <input class="form-control" id="password" name="password"
                                        placeholder="Password baru" type="password" />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
                                    <input class="form-control" id="password_confirmation" name="password_confirmation"
                                        placeholder="Ulangi password baru" type="password" />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="">Pilih Status</option>
                                        <option value="Aktif"
                                            {{ old('status', $pengguna->status) == 'Aktif' ? 'selected' : '' }}>Aktif
                                        </option>
                                        <option value="Tidak Aktif"
                                            {{ old('status', $pengguna->status) == 'Tidak Aktif' ? 'selected' : '' }}>
                                            Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-primary" type="submit">💾 Update</button>
                                <a href="{{ route('manajemen_pengguna.index') }}" class="btn btn-secondary">❌ Batal</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
