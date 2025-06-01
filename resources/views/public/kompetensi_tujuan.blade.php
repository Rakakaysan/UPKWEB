<?php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kompetensi dan Tujuan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }

        .sidebar {
            background-color: #f4a25c;
            width: 200px;
            height: 100vh;
            padding-top: 20px;
            box-sizing: border-box;
        }

        .sidebar a {
            display: block;
            color: black;
            text-decoration: none;
            padding: 10px 15px;
            margin: 5px 0;
        }

        .sidebar a:hover {
            background-color: #d88b4e;
        }

        .main {
            flex-grow: 1;
            background-color: #fff3e1;
            padding: 20px;
        }

        .main h2 {
            text-align: center;
        }

        .section {
            background-color: #f4a25c;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            margin-bottom: 10px;
            padding: 8px 16px;
            background-color: #fff;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        button:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <img src="simba_logo.png" alt="SIMBA Logo" style="width: 100%; padding: 0 10px; margin-bottom: 20px;">
    <a href="#">Kompetensi Dan Tujuan</a>
    <a href="#">Materi</a>
    <a href="#">Tugas</a>
    <a href="#">Tentang Aplikasi Dan Pengembang</a>
    <a href="#">Keluar Apk</a>
</div>

<div class="main">
    <button>Refresh Data</button>
    <h2>Kompetensi Dan Tujuan</h2>

    <div class="section">
        <h3>KOMPETENSI INTI (KI)</h3>
        <p><strong>KI 1 (Sikap Spiritual):</strong> Menghargai dan menghayati ajaran agama yang dianut.</p>
        <p><strong>KI 2 (Sikap Sosial):</strong> Menunjukkan perilaku jujur, disiplin, tanggung jawab, santun, peduli, dan percaya diri dalam berinteraksi dengan lingkungan sosial.</p>
        <p><strong>KI 3 (Pengetahuan):</strong> Memahami pengetahuan fakta, konseptual, dan prosedural dalam ilmu pengetahuan sosial terkait sejarah, budaya.</p>
    </div>

    <div class="section">
        <h3>KOMPETENSI DASAR (KD)</h3>
        <p>3.1 Menjelaskan sejarah berdirinya candi di Indonesia dan fungsinya pada masa lalu.</p>
        <p>3.2 Mengidentifikasi jenis-jenis candi berdasarkan ciri arsitektur dan corak budayanya (Hindu-Buddha).</p>
        <p>3.3 Menganalisis nilai-nilai budaya dan sejarah yang terkandung dalam peninggalan candi.</p>
    </div>

    <div class="section">
        <h3>KOMPETENSI INTI (KI)</h3>
        <p><strong>Tujuan Pembelajaran:</strong> Setelah mengikuti pembelajaran peserta didik diharapkan mampu:</p>
        <ol>
            <li>Menjelaskan sejarah dan latar belakang pembangunan candi di Indonesia.</li>
            <li>Mengidentifikasi perbedaan candi Hindu dan Buddha dari segi arsitektur dan fungsi.</li>
            <li>Menghargai peninggalan sejarah berupa candi.</li>
        </ol>
    </div>
</div>

</body>
</html>
