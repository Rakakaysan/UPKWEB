@extends('layouts.app')

@section('content')
<style>
    .materi-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        padding: 2rem;
    }

    .materi-card {
        position: relative;
        background: #fff;
        border-radius: 1.5rem;
        box-shadow: 6px 6px 15px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        text-align: center;
        padding: 1rem;
    }

    .materi-card:hover {
        transform: translateY(-8px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25);
    }

    .materi-card img {
        width: 100%;
        border-radius: 1rem;
        margin-bottom: 0.75rem;
    }

    .materi-card-title {
        font-weight: 700;
        font-size: 1.1rem;
        color: #333;
    }

    .materi-title {
        font-size: 2.2rem;
        font-weight: 900;
        letter-spacing: 3px;
        text-align: center;
        margin-top: 1.5rem;
        margin-bottom: 2rem;
        font-family: 'Arial Black', sans-serif;
    }

    .card-menu-icon {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        font-size: 1.4rem;
        cursor: pointer;
        color: #888;
        transition: color 0.3s ease;
    }

    .card-menu-icon:hover {
        color: #333;
    }
</style>

<div class="materi-title">MATERI CANDI</div>

<div class="materi-container">
    @php
        $materi = [
            ['judul' => 'Pengertian Candi', 'gambar' => 'materi1.png'],
            ['judul' => 'Ciri Ciri Candi', 'gambar' => 'materi2.png'],
            ['judul' => 'Jenis Jenis Candi', 'gambar' => 'materi3.png'],
            ['judul' => 'Fungsi Candi', 'gambar' => 'materi4.png'],
            ['judul' => 'Contoh Candi', 'gambar' => 'materi5.png'],
            ['judul' => 'Materi Video Candi', 'gambar' => 'materi6.png'],
        ];
    @endphp

    @foreach ($materi as $item)
        <div class="materi-card">
            <img src="{{ asset('img/' . $item['gambar']) }}" alt="{{ $item['judul'] }}">
            <div class="materi-card-title">{{ $item['judul'] }}</div>
            <div class="card-menu-icon">&#8942;</div> {{-- titik tiga vertikal --}}
        </div>
    @endforeach
</div>
@endsection
