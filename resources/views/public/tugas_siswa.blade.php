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
      min-height: 100vh;
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
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px 20px;
    }

    .task-container {
      background-color: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 800px;
    }

    .task-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .task-header h1 {
      color: #5a3e36;
      font-size: 1.8rem;
      margin-bottom: 5px;
    }

    .task-item {
      border-bottom: 1px solid #e0e0e0;
      padding: 20px 0;
    }

    .task-item:last-child {
      border-bottom: none;
    }

    .task-item h2 {
      color: #7a5c51;
      font-size: 1.3rem;
      margin-bottom: 10px;
    }

    .task-description {
      color: #555;
      margin-bottom: 15px;
      line-height: 1.5;
    }

    .task-status {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 5px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .status-not-done {
      background-color: #ffebee;
      color: #c62828;
    }

    .status-done {
      background-color: #e8f5e9;
      color: #2e7d32;
    }

    .task-completed {
      text-align: center;
      margin-top: 30px;
      color: #777;
      font-style: italic;
    }

    @media (max-width: 900px) {
      body {
        flex-direction: column;
      }

      .main-content {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
@extends('template.sidebar_siswa')

@section('content')
  <div class="main-content">
    <div class="task-container">
      <div class="task-header">
        <h1>List Daftar Tugas Siswa</h1>
      </div>
      
      <div class="task-item">
        <h2>Mempelajari Sejarah Candi Borobudur</h2>
        <div class="task-description">Deskripsi: Baca materi tentang sejarah Candi Borobudur dan buat ringkasan.</div>
        <div class="task-status status-not-done">Status: Belum Selesai</div>
      </div>
      
      <div class="task-item">
        <h2>Menyelesaikan Soal Candi Prambanan</h2>
        <div class="task-description">Deskripsi: Kerjakan soal tentang Candi Prambanan yang ada di halaman 30 buku.</div>
        <div class="task-status status-done">Status: Selesai</div>
      </div>
      
      <div class="task-completed">
        Tugas selesai
      </div>
    </div>
  </div>

  <script>
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
@endsection