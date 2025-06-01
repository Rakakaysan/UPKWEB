<?php
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tentang Aplikasi dan Pengembang</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
    }

    .sidebar {
      background-color: #f4a25c;
      width: 200px;
      height: 100vh;
      padding: 20px 10px;
      box-sizing: border-box;
    }

    .sidebar a {
      display: block;
      text-decoration: none;
      color: black;
      padding: 10px;
      margin: 5px 0;
    }

    .sidebar a:hover {
      background-color: #d88b4e;
    }

    .main {
      flex-grow: 1;
      background-color: #fff3e1;
      padding: 20px;
      box-sizing: border-box;
    }

    .main button {
      margin-bottom: 15px;
      padding: 8px 16px;
      background-color: #fff;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .main h2 {
      text-align: center;
      margin-bottom: 25px;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .kiri {
      width: 20%;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }

    .tengah {
      width: 55%;
      font-size: 14px;
      line-height: 1.5;
    }

    .kanan {
      width: 20%;
      font-size: 14px;
      text-align: left;
    }

    .fitur {
      margin-top: 10px;
    }

    .fitur i {
      margin-right: 5px;
    }

    .our-team {
      text-align: center;
      margin-top: 30px;
      font-style: italic;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <img src="simba_logo.png" alt="SIMBA Logo" style="width: 100%; margin-bottom: 20px;">
    <a href="#">Kompetensi Dan Tujuan</a>
    <a href="#">Materi</a>
    <a href="#">Tugas</a>
    <a href="#">Tentang Aplikasi Dan Pengembang</a>
    <a href="#">Keluar Apk</a>
  </div>

  <div class="main">
    <button onclick="location.reload()">Refresh Data</button>
    <h2>Tentang Aplikasi dan Pengembang</h2>
    
    <div class="content">
      <div class="kiri">M. Haris Yahya</div>
      <div class="tengah">
        <p>Simba adalah aplikasi pembelajaran interaktif yang dirancang untuk mengenalkan dan memperdalam pemahaman tentang candi di Indonesia.</p>
        <p>Dengan tampilan yang modern dan user-friendly, Simba menyajikan berbagai materi edukatif mengenai pengertian, ciri-ciri, jenis-jenis, fungsi dan contoh candi dalam bentuk yang menarik dan mudah dipahami.</p>
        <p><strong>Fitur Utama:</strong></p>
        <div class="fitur">
          ☑ <strong>Materi</strong> – Informasi mendalam tentang berbagai candi di Indonesia.<br>
          ☑ <strong>Gambar</strong> – Ilustrasi menarik untuk memahami struktur candi.<br>
          ☑ <strong>Quiz</strong> – Evaluasi dengan soal interaktif.
        </div>
        <p>Dengan Simba, belajar tentang candi jadi lebih menyenangkan dan interaktif! 🧠 🏛 ✨</p>
      </div>
      <div class="kanan">
        <p>Raka Kaysan Nawfal<br>
        Rado Da Silva<br>
        Hedwig Mariane Avatar<br>
        Wawa Zahra Chika<br>
        Intan Dwi P</p>
      </div>
    </div>

    <div class="our-team">
      <strong>Our Team</strong>
    </div>
  </div>

</body>
</html>