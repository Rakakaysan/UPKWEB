<div class="main-container">
    <div class="sidebar">
        <div class="d-flex flex-column align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3003/3003035.png" alt="Avatar">
            <h6 class="mt-2">{{ auth('web')->user()->nama_lengkap }}</h6>
            <p class="text-muted small">{{ \Carbon\Carbon::now()->translatedFormat('l d, M Y') }}</p>
        </div>

        <h5 class="fw-bold mt-4 ps-3">Menu Siswa</h5>
        <ul class="nav flex-column mt-3">
            <li class="nav-item">
                <a href="{{ route('siswa.kompetisi') }}"
                    class="nav-link {{ request()->routeIs('siswa.kompetisi') ? 'active' : '' }}">
                    <i class="fas fa-users me-2"></i> Kompetensi & Tujuan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('siswa.materi') }}"
                    class="nav-link {{ request()->routeIs('siswa.materi') ? 'active' : '' }}">
                    <i class="fas fa-book me-2"></i> Materi
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('siswa.tugas') }}"
                    class="nav-link {{ request()->routeIs('siswa.tugas') ? 'active' : '' }}">
                    <i class="fas fa-info-circle me-2"></i> Tugas
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('siswa.tentang') }}"
                    class="nav-link {{ request()->routeIs('siswa.tentang') ? 'active' : '' }}">
                    <i class="fas fa-mobile-alt me-2"></i> Tentang Aplikasi & Pengembang
                </a>
            </li>
            <li class="nav-item mt-4">
                <form method="POST" action="{{ route('logout.action') }}">
                    @csrf
                    @method('POST')
                    <button type="submit" class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>


    <div class="main-content">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
