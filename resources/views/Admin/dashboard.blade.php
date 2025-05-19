@extends('template.layout')

@section('title', 'Dashboard Admin')

@section('main')
<div id="layoutSidenav">
    @include('template.sidebar_admin')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 mt-4">
                <div class="text-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/921/921276.png" width="150" class="mb-3" alt="Admin Logo">
                    <h1>Welcome<br><strong>Back, Admin</strong></h1>
                    <p class="text-muted">Last Update, 15 Feb 2025</p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card-dashboard text-center">
                            <div class="card-header-custom">
                                <div class="dot dot-left"></div>
                                <div class="dot dot-right"></div>
                                Total Pengguna
                            </div>
                            <div class="py-4 fs-5">200 Pengguna</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-dashboard text-center">
                            <div class="card-header-custom">
                                <div class="dot dot-left"></div>
                                <div class="dot dot-right"></div>
                                Total Materi
                            </div>
                            <div class="py-4 fs-5">10 Materi</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-dashboard text-center">
                            <div class="card-header-custom">
                                <div class="dot dot-left"></div>
                                <div class="dot dot-right"></div>
                                Total Tugas
                            </div>
                            <div class="py-4 fs-5">15 Tugas</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
