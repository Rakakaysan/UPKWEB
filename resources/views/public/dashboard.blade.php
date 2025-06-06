@extends('layouts.app')

@section('content')
<div style="padding: 2rem; font-family: sans-serif;">
    <h1 style="text-align: center; margin-bottom: 2rem;">Selamat Datang di SIMBA</h1>

    <div style="display: flex; justify-content: center; margin-bottom: 3rem;">
        <img src="{{ asset('img/siswa-removebg-preview.png') }}" alt="Animasi Siswi" style="width: 200px;">
    </div>

    <h2 style="text-align: center; margin-bottom: 1.5rem;">Candi yang Bisa Dipelajari</h2>

    <div style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 2rem;">
        <div style="text-align: center;">
            <img src="{{ asset('img/borobudur-removebg-preview.png') }}" alt="Candi Borobudur" style="width: 150px;">
            <p>Candi Borobudur</p>
        </div>
        <div style="text-align: center;">
            <img src="{{ asset('img/prambanan-removebg-preview.png') }}" alt="Candi Prambanan" style="width: 150px;">
            <p>Candi Prambanan</p>
        </div>
        <div style="text-align: center;">
            <img src="{{ asset('img/cangkuang-removebg-preview.png') }}" alt="Candi Cangkuang" style="width: 150px;">
            <p>Candi Cangkuang</p>
        </div>
    </div>
</div>
@endsection
