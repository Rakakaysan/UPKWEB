@extends('template.sidebar_siswa')

@section('content')
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

<div class="main-content">
    <div class="form-panel">
        <div class="form-group search-bar">
            <label for="search">Search</label>
            <input type="text" id="search" placeholder="Search...">
        </div>

        <div class="form-group">
            <label for="material-name">Nama materi</label>
            <input type="text" id="material-name">
        </div>

        <div class="form-group">
            <label for="material-content">Konten Materi</label>
            <textarea id="material-content"></textarea>
        </div>

        <div class="form-group">
            <label for="youtube-url">URL YouTube Materi</label>
            <input type="text" id="youtube-url">
        </div>
    </div>

    <div class="preview-panel">
        {{-- Tempat untuk preview materi atau iframe YouTube --}}
    </div>
</div>
@endsection
