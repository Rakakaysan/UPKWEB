@extends('template.layout')

@section('title', 'Tugas')

@section('main')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            background-color: #f3d8d0;
            min-height: 100vh;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            text-decoration: none;
            color: #444;
            border-radius: 10px;
            transition: background-color 0.3s, font-weight 0.3s;
        }

        .menu a:hover,
        .menu a.active {
            background-color: #d8d9e6;
            font-weight: bold;
        }

        .logout {
            margin-top: 30px;
            text-align: left;
        }

        .logout a {
            text-decoration: none;
            color: red;
            font-weight: bold;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
        }

        .task-container {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            min-width: 800px;
        }

        .task-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .task-header h1 {
            color: #5a3e36;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .task-item {
            border-bottom: 1px solid #e0e0e0;
            padding: 20px 0;
        }

        .task-item:last-child {
            border-bottom: none;
        }

        .task-item h2 {
            color: #7a5c51;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .task-description {
            color: #555;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .task-status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .status-not-done {
            background-color: #ffebee;
            color: #c62828;
        }

        .status-done {
            background-color: #e8f5e9;
            color: #2e7d32;
        }

        .task-completed {
            text-align: center;
            margin-top: 30px;
            color: #777;
            font-style: italic;
        }

        @media (max-width: 900px) {
            body {
                flex-direction: column;
            }

            .main-content {
                padding: 20px;
            }
        }
    </style>
    <div id="layoutSidenav_nav">
        @include('template.sidebar_siswa')
    </div>
@endsection

<div class="layoutSidenav_content" style="padding-left: 25%; padding-right: 5%; padding-top: 5%;">
    <div class="task-container">
        <div class="task-header">
            <h1>Daftar Tugas Siswa</h1>
        </div>
        @isset($tugas)
            @if ($tugas->isEmpty())
                <div class="text-center py-8">
                    <p class="text-gray-600">Yay belum ada tugas 🥳🎉</p>
                </div>
            @else
                @foreach ($tugas as $index => $tugass)
                    <div class="task-item">
                        @if ($tugass->pengumpulan)
                            <h2>
                                <h2>{{ $tugass->nama_tugas }}</h2>
                            </h2>
                        @else
                            <a href="{{ route('siswa.tugas.id', ['id' => $tugass->id_tugas]) }}">
                                <h2>{{ $tugass->nama_tugas }}</h2>
                            </a>
                        @endif

                        <div class="task-description">Deskripsi: {{ $tugass->deskripsi_tugas }}
                        </div>
                        @if ($tugass->pengumpulan)
                            <div class="task-status status-done">Status: Selesai</div>
                            @if ($tugass->pengumpulan->nilai)
                                <div class="task-status status-done">Nilai: {{ $tugass->pengumpulan->nilai }}</div>
                            @else
                                <div class="task-status status-not-done">Nilai: Belum dinilai</div>
                            @endif
                        @else
                            <div class="task-status status-not-done">Status: Belum Selesai</div>
                        @endif
                    </div>
                @endforeach
            @endif
        @else
            <div class="text-center py-8">
                <p class="text-gray-600">Yay belum ada tugas 🥳🎉</p>
            </div>
        @endisset




        {{-- <div class="task-item">
            <h2>Menyelesaikan Soal Candi Prambanan</h2>
            <div class="task-description">Deskripsi: Kerjakan soal tentang Candi Prambanan yang ada di halaman 30
                buku.</div>
            <div class="task-status status-done">Status: Selesai</div>
        </div> --}}

        {{-- <div class="task-completed">
            Tugas selesai
        </div> --}}
    </div>
</div>
