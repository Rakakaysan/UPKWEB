@extends('template.layout')

@section('title', 'Tentang Aplikasi')

@section('main')
    <div id="layoutSidenav_nav">
        @include('template.sidebar_siswa')
    </div>
@endsection

<div id="layoutSidenav_content" style="padding-left: 25%; padding-right: 5%; padding-top: 5%;">
    <main class="about-main-content">
        <div class="container-fluid">
            <div class="glass-card">
                <div class="row align-items-center g-5">

                    <div class="col-lg-7">
                        <h1 class="about-title">Mengenal SIMBA</h1>
                        <p class="lead mb-4 animate-up" style="--animation-delay: 0.2s;">
                            <strong>Simba</strong> adalah gerbang petualangan digital Anda untuk menjelajahi
                            keagungan candi-candi di Indonesia. Dirancang dengan semangat modern, Simba mengubah
                            pembelajaran sejarah menjadi pengalaman visual yang imersif dan interaktif.
                        </p>

                        <h3 class="h4 mb-3 animate-up" style="--animation-delay: 0.3s;">🚀 Fitur Unggulan:</h3>
                        <div class="mb-4">
                            <div class="feature-list-item animate-up" style="--animation-delay: 0.4s;">
                                <i class="fas fa-book-open"></i>
                                <strong>Materi Mendalam</strong> – Jelajahi ensiklopedia lengkap candi Indonesia.
                            </div>
                            <div class="feature-list-item animate-up" style="--animation-delay: 0.5s;">
                                <i class="fas fa-images"></i>
                                <strong>Galeri Visual</strong> – Nikmati ilustrasi & gambar menakjubkan yang
                                menghidupkan sejarah.
                            </div>
                            <div class="feature-list-item animate-up" style="--animation-delay: 0.6s;">
                                <i class="fas fa-brain"></i>
                                <strong>Kuis Interaktif</strong> – Uji wawasan Anda dan jadilah master candi
                                sejati!
                            </div>
                        </div>
                        <p class="animate-up" style="--animation-delay: 0.7s;">Dengan Simba, setiap candi
                            memiliki cerita, dan setiap cerita adalah petualangan.</p>
                    </div>

                    <div class="col-lg-5 text-center">
                        <img src="{{ asset('img/nur.jpg') }}" alt="Tim Pengembang Simba"
                            class="dev-photo img-fluid mb-5" />

                        <h2 class="team-title animate-up" style="--animation-delay: 0.5s;">Tim Kreatif di Balik
                            Simba</h2>
                        <div class="team-list">
                            <div class="team-member" style="--animation-delay: 0.6s;"><i
                                    class="fas fa-user-astronaut"></i> Raka Kaysan Nawfal</div>
                            <div class="team-member" style="--animation-delay: 0.7s;"><i
                                    class="fas fa-user-astronaut"></i> Rado Da Silva</div>
                            <div class="team-member" style="--animation-delay: 0.8s;"><i
                                    class="fas fa-user-astronaut"></i> Hedwig Mariane Avatar</div>
                            <div class="team-member" style="--animation-delay: 0.9s;"><i
                                    class="fas fa-user-astronaut"></i> Wawa Zahra Chika</div>
                            <div class="team-member" style="--animation-delay: 1.0s;"><i
                                    class="fas fa-user-astronaut"></i> Intan Dwi P</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
</div>
