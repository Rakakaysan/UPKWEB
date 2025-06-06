@extends('layouts.app')

@section('content')
<div style="font-family: sans-serif; padding: 2rem; background-color: #f3e3dc; min-height: 100vh;">
    <h1 style="text-align: center; font-weight: bold; font-size: 1.8rem; color: #2c2c2c; margin-bottom: 2rem;">
        Kompetensi & Tujuan
    </h1>

    <div style="display: flex; gap: 2rem; flex-wrap: wrap; justify-content: center;">
        <!-- Kompetensi Inti (KI) -->
        <div style="background: white; border-radius: 1rem; padding: 1.5rem; width: 300px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <h3 style="font-weight: bold; margin-bottom: 1rem; color: #c57b57;">KOMPETENSI INTI (KI)</h3>
            <ul style="font-size: 0.9rem; padding-left: 1rem;">
                <li><b>KI 1:</b> Menghargai dan menghayati ajaran agama.</li>
                <li><b>KI 2:</b> Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli, santun, dan percaya diri.</li>
                <li><b>KI 3:</b> Memahami pengetahuan faktual dan konseptual berdasarkan rasa ingin tahu.</li>
                <li><b>KI 4:</b> Menyajikan pengetahuan faktual dan konseptual dalam bahasa yang jelas dan logis.</li>
            </ul>
        </div>

        <!-- Kompetensi Dasar (KD) -->
        <div style="background: white; border-radius: 1rem; padding: 1.5rem; width: 300px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <h3 style="font-weight: bold; margin-bottom: 1rem; color: #c57b57;">KOMPETENSI DASAR (KD)</h3>
            <ul style="font-size: 0.9rem; padding-left: 1rem;">
                <li>3.1 Menjelaskan sejarah berdirinya candi Indonesia dan fungsinya.</li>
                <li>3.2 Mengidentifikasi jenis candi berdasarkan struktur dan corak arsitektur.</li>
                <li>3.4 Menganalisis nilai-nilai budaya dan agama yang terkandung dalam peninggalan sejarah candi.</li>
            </ul>
        </div>
    </div>

    <!-- Tujuan Pembelajaran -->
    <div style="margin-top: 3rem; display: flex; justify-content: center;">
        <div style="background: white; border-radius: 1rem; padding: 2rem; width: 80%; max-width: 800px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <h3 style="text-align: center; font-weight: bold; color: #c57b57; margin-bottom: 1rem;">TUJUAN PEMBELAJARAN</h3>
            <p style="font-size: 0.95rem; text-align: justify;">
                Setelah mengikuti pembelajaran ini, peserta didik diharapkan mampu:
            </p>
            <ol style="font-size: 0.9rem; padding-left: 1rem;">
                <li>Menjelaskan sejarah dan latar belakang berdirinya candi di Indonesia.</li>
                <li>Mengidentifikasi jenis dan ciri-ciri arsitektur candi di Indonesia.</li>
                <li>Menganalisis nilai-nilai budaya dan agama yang terkandung dalam candi-candi bersejarah.</li>
            </ol>
        </div>
    </div>
</div>
@endsection
