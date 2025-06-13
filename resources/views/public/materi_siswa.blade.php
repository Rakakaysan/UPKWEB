@extends('template.layout')

@section('title', 'Materi')

@section('main')
    <style>
        .main-content {
            display: flex;
            justify-content: space-between;
            padding: 40px;
            gap: 40px;
            flex-wrap: wrap;
        }

        .form-panel {
            width: 35%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 8px;
            font-weight: 500;
            color: #4b2c24;
        }

        .form-group input,
        .form-group textarea {
            padding: 10px 15px;
            border-radius: 20px;
            border: none;
            outline: none;
            background-color: #fff;
            font-size: 0.95rem;
        }

        .form-group textarea {
            height: 160px;
            resize: none;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            outline: none;
        }

        .preview-panel {
            flex-grow: 1;
            background-color: #8b7d7a;
            border-radius: 20px;
            min-height: 350px;
        }

        @media (max-width: 900px) {
            .main-content {
                flex-direction: column;
                align-items: center;
            }

            .form-panel,
            .search-bar input {
                width: 100%;
            }

            .preview-panel {
                width: 100%;
            }
        }
    </style>
    <div id="layoutSidenav_nav">
        @include('template.sidebar_siswa')
    </div>
@endsection

<div id="layoutSidenav_content" style="padding: 3%;">
    <div class="main-content">
        <div class="form-panel">
            @isset($materi_id)
                <a href="{{ route('siswa.materi') }}">
                    <button class="btn btn-warning">Kembali</button>
                </a>
            @endisset


            <form action="{{ route('siswa.materi') }}" class="form-group search-bar">
                <label for="search">Cari</label>
                @isset($input)
                    <input value="{{ $input }}" type="text" id="search" name="q" placeholder="Cari...">
                @else
                    <input type="text" id="search" name="q" placeholder="Cari...">
                @endisset

            </form>


            @isset($materi_id)
                <div class="form-group">
                    <label for="material-name">Nama Materi</label>
                    <input disabled value="{{ $materi_id->nama_materi }}" type="text" id="material-name">
                </div>

                <div class="form-group">
                    <label for="material-content">Konten Materi</label>
                    <textarea disabled id="material-content">{{ $materi_id->konten_materi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="youtube-url">URL YouTube Materi</label>
                    <input disabled value="{{ $materi_id->url_youtube }}" type="text" id="youtube-url">
                </div>
            @endisset
        </div>

        <div class="preview-panel" style="padding-top: 3%;">
            <div class="table-responsive">
                @isset($materi)
                    @if ($materi->isEmpty())
                        <div class="text-center py-8">
                            <i class="fas fa-users-slash text-4xl text-gray-400 mb-4"></i>
                            <p class="text-white">Materi pembelajaran kosong atau pencarian tidak ditemukan</p>
                        </div>
                    @else
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 25%;">Nama Materi</th>
                                    {{-- <th style="width: 30%;">Deskripsi</th> --}}
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materi as $index => $materis)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $materis->nama_materi }}</td>
                                        {{-- <td>{{ $materis->konten_materi }}</td> --}}
                                        <td>
                                            <div class="">
                                                <a href="{{ $materis->url_youtube }}" target="_blank"
                                                    class="btn btn-sm btn-primary mb-2">Tonton Video</a>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('siswa.materi.id', parameters: ['id' => $materis->id_materi]) }}"
                                                    class="btn btn-sm btn-secondary">Detail</a>
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

                @if (isset($materi) && $materi->hasPages())
                    <div class="mt-4">
                        {{ $materi->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
