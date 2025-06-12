<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIMBA Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #cfaea2, #f6e9e5);
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        .main-container {
            display: fixed;
            padding-left: 400px;
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            min-height: 100vh;
            background-color: #f4e4de;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px 15px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            border-radius: 0 40px 40px 0;
        }

        .sidebar img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .sidebar .nav-link {
            color: #5a4e4a;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: #e8d8d2;
            color: #3a2e2a;
        }

        .sidebar .nav-link.active {
            background-color: #dbdbe5;
            font-weight: bold;
        }

        .main-content {
            margin-left: 280px;
            flex: 1;
            padding: 30px;
        }

        .card-dashboard {
            border-radius: 20px;
            background: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: none;
            transition: transform 0.3s;
        }

        .card-dashboard:hover {
            transform: translateY(-5px);
        }

        .card-header-custom {
            background: #f8f9fa;
            border-radius: 15px 15px 0 0;
            padding: 15px;
            font-weight: 600;
            position: relative;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #6c757d;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .dot-left {
            left: 15px;
        }

        .dot-right {
            right: 15px;
        }

        @media (max-width: 992px) {
            .sidebar {
                width: 250px;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="sidebar">
            <div class="d-flex flex-column align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/3003/3003035.png" alt="Avatar">
                <h6 class="mt-2">Nama Guru</h6>
                <p class="text-muted small">{{ \Carbon\Carbon::now()->translatedFormat('l d, M Y') }}</p>
            </div>

            <h5 class="fw-bold mt-4 ps-3">Menu Admin</h5>
            <ul class="nav flex-column mt-3">
                <li class="nav-item">
                    <a href="{{ route('manajemen_pengguna.index') }}"
                        class="nav-link {{ request()->routeIs('manajemen_pengguna.index') ? 'active' : '' }}">
                        <i class="fas fa-users me-2"></i> Manajemen Pengguna
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('materi_pembelajaran.index') }}"
                        class="nav-link {{ request()->routeIs('materi_pembelajaran.index') ? 'active' : '' }}">
                        <i class="fas fa-book me-2"></i> Materi Pembelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tugas.index') }}"
                        class="nav-link {{ request()->routeIs('tugas.index') ? 'active' : '' }}">
                        <i class="fas fa-car me-2"></i>Tugas
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengumpulan_tugas') }}"
                        class="nav-link {{ request()->routeIs('pengumpulan_tugas') ? 'active' : '' }}">
                        <i class="fas fa-info-circle me-2"></i> Pengumpulan Tugas
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tentang_aplikasi') }}"
                        class="nav-link {{ request()->routeIs('tentang_aplikasi') ? 'active' : '' }}">
                        <i class="fas fa-mobile-alt me-2"></i> Tentang Aplikasi
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <a href="{{ route('login') }}" class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>


        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
