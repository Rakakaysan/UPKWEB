<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>List Daftar Tugas Siswa</title>
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
      margin-bottom: 5px;
    }

    .main .subtitle {
      font-size: 14px;
      color: gray;
      margin-bottom: 15px;
    }

    .container {
      display: flex;
      justify-content: space-between;
    }

    .left {
      width: 60%;
    }

    .right {
      width: 35%;
    }

    textarea {
      width: 100%;
      height: 60px;
      padding: 10px;
      font-family: Arial;
      font-size: 14px;
      resize: none;
    }

    .label {
      font-weight: bold;
      margin-top: 10px;
    }

    .answer {
      margin-top: 10px;
      background-color: #eee;
      padding: 10px;
      font-size: 14px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    .search-box {
      margin-bottom: 10px;
    }

    input[type="text"] {
      width: 100%;
      padding: 6px;
      margin-top: 4px;
      box-sizing: border-box;
    }

    .submit-btn {
      margin-top: 10px;
      padding: 8px 14px;
      background-color: #ddd;
      border: none;
      cursor: pointer;
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
    <h2>List Daftar Tugas <span style="font-weight: normal;">Siswa</span></h2>
    <div class="subtitle">Kamis, 22 Mei 2025</div>

    <div class="container">
      <div class="left">
        <div class="label">Konten Tugas</div>
        <textarea readonly>carilah berbagai jenis candi di indonesia, boleh di internet</textarea>

        <div class="label">Jawaban Tugas</div>
        <div class="answer">
          mencari berbagai jenis candi yang ada di indonesia<br>
          <em>Belum Dikumpulkan</em>
        </div>

        <button class="submit-btn">Kumpulkan</button>
      </div>

      <div class="right">
        <div class="search-box">
          <label for="search">Search</label>
          <input type="text" id="search" placeholder="Cari tugas...">
        </div>
        <table>
          <tr>
            <th>Nama Tugas</th>
            <th>Tgl Dibuat</th>
            <th>Tgl Diubah</th>
          </tr>
          <tr>
            <td>peninggalan candi hindu budha</td>
            <td>30/04/2025</td>
            <td>-</td>
          </tr>
          <tr>
            <td>mencari berbagai jenis candi yang ada di indonesia</td>
            <td>26/04/2025</td>
            <td>30/04/2025</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</body>
</html>