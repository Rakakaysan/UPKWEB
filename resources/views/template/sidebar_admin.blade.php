<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #cfaea2, #f6e9e5);
            font-family: 'Segoe UI', sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #f4e4de;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
            padding: 30px 15px;
            border-radius: 40px 0 0 40px;
        }
        .sidebar img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .card-dashboard {
            border-radius: 20px;
            background: #e4e4ec;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-header-custom {
            background: #dbdbe5;
            border-radius: 20px 20px 0 0;
            padding: 10px 15px;
            font-weight: bold;
            position: relative;
        }
        .dot {
            width: 10px;
            height: 10px;
            background-color: black;
            border-radius: 50%;
            position: absolute;
            top: 12px;
        }
        .dot-left {
            left: 10px;
        }
        .dot-right {
            right: 10px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar d-flex flex-column align-items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3003/3003035.png" alt="Avatar">
            <h6 class="mt-3">Nama Guru</h6>
            <p>Senin 17, Feb 2025</p>
            <h5 class="fw-bold mt-4">Menu Admin</h5>
            <ul class="nav flex-column w-100">
                <li class="nav-item"><a href="#" class="nav-link">👨‍💼 Manajemen Pengguna</a></li>
                <li class="nav-item"><a href="#" class="nav-link">📚 Materi Pembelajaran</a></li>
                <li class="nav-item"><a href="#" class="nav-link">👥 Informasi Pengguna</a></li>
                <li class="nav-item"><a href="#" class="nav-link">⚙️ Pengaturan Sistem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">📱 Tentang Aplikasi</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-danger">🚪 Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 py-4">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
