@extends('template.sidebar_siswa')

@section('content')
    <div class="container-fluid">
        <h1 class="text-left fw-bold mb-5" style="color:#3d2b1f; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
            Kompetensi & Tujuan
        </h1>

        <div class="row justify-content-left g-4">
            <!-- KOMPETENSI INTI -->
            <div class="col-md-6">
                <div class="card-dashboard">
                    <div class="card-header-custom">
                        <span class="dot dot-left"></span>
                        KOMPETENSI INTI (KI)
                        <span class="dot dot-right"></span>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>KI 1 (Sikap Spiritual):</strong> Menghargai dan menghayati ajaran agama yang dianut.
                            </li>
                            <li><strong>KI 2 (Sikap Sosial):</strong> Menunjukkan perilaku jujur, disiplin, tanggung jawab,
                                santun, peduli, dan percaya diri dalam berinteraksi dengan lingkungan sosial.</li>
                            <li><strong>KI 3 (Pengetahuan):</strong> Memahami pengetahuan faktual, konseptual, dan
                                prosedural dalam ilmu pengetahuan sosial terkait sejarah, budaya, dan warisan bangsa.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- KOMPETENSI DASAR -->
            <div class="col-md-8">
                <div class="card-dashboard">
                    <div class="card-header-custom">
                        <span class="dot dot-left"></span>
                        KOMPETENSI DASAR (KD)
                        <span class="dot dot-right"></span>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>3.1</strong> Menjelaskan sejarah berdirinya candi di Indonesia dan fungsinya pada
                                masa lalu.</li>
                            <li><strong>3.2</strong> Mengidentifikasi jenis-jenis candi berdasarkan ciri arsitektur dan
                                corak budayanya (Hindu-Buddha).</li>
                            <li><strong>3.3</strong> Menganalisis nilai-nilai budaya dan sejarah yang terkandung dalam
                                peninggalan candi.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- TUJUAN PEMBELAJARAN -->
            <div class="col-md-6">
                <div class="card-dashboard">
                    <div class="card-header-custom">
                        <span class="dot dot-left"></span>
                        TUJUAN PEMBELAJARAN
                        <span class="dot dot-right"></span>
                    </div>
                    <div class="card-body">
                        <p><strong>Setelah mengikuti pembelajaran ini, peserta didik diharapkan mampu:</strong></p>
                        <ul>
                            <li>1. Menjelaskan sejarah dan latar belakang pembangunan candi di Indonesia.</li>
                            <li>2. Mengidentifikasi perbedaan candi Hindu dan Buddha dari segi arsitektur dan fungsi.</li>
                            <li>3. Menghargai peninggalan sejarah berupa candi sebagai warisan budaya bangsa.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
