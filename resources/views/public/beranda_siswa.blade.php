<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simba - Siswa Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      background-color: #f3d8d0;
    }

    .sidebar {
      width: 250px;
      background-color: #f7e6df;
      height: 100vh;
      padding: 30px 20px;
      border-top-right-radius: 40px;
      border-bottom-right-radius: 40px;
      box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar .profile {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar .profile img {
      width: 80px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .sidebar .profile h4 {
      font-size: 1rem;
      font-weight: 600;
    }

    .sidebar .profile p {
      font-size: 0.8rem;
      color: #777;
    }

    .sidebar .date {
      font-size: 0.85rem;
      color: #555;
      margin-top: 5px;
    }

    .menu {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .menu a {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px;
      text-decoration: none;
      color: #444;
      border-radius: 10px;
      transition: background-color 0.3s, font-weight 0.3s;
    }

    .menu a:hover,
    .menu a.active {
      background-color: #d8d9e6;
      font-weight: bold;
    }

    .logout {
      margin-top: 30px;
      text-align: left;
    }

    .logout a {
      text-decoration: none;
      color: red;
      font-weight: bold;
    }

    .main-content {
      flex-grow: 1;
      padding: 30px;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <div class="profile">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Guru">
      <h4>Nama Siswa</h4>
      <p></p>
      <div class="date" id="tanggal"></div>
    </div>
    <div class="menu">
      <a href="#">🏠 Beranda</a>
      <a href="#">📚Manajemen Pengguna</a>
      <a href="#">📘 Materi</a>
      <a href="#">📥 Tugas</a>
      <a href="#">ℹ️ Tentang Aplikasi & Pengembang</a>
    </div>
    <div class="logout">
      <a href="#">🔌 Logout</a>
    </div>
  </div>

  <div class="main-content">
    <p>Halaman beranda</p>
  </div>

  <script>
    // JavaScript untuk tanggal realtime
    const tanggalElement = document.getElementById("tanggal");
    const hariList = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const bulanList = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    const today = new Date();
    const hari = hariList[today.getDay()];
    const tanggal = today.getDate();
    const bulan = bulanList[today.getMonth()];
    const tahun = today.getFullYear();

    tanggalElement.textContent = `${hari}, ${tanggal} ${bulan} ${tahun}`;

    const menuLinks = document.querySelectorAll('.menu a');
    menuLinks.forEach(link => {
      link.addEventListener('click', function () {
        menuLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>
