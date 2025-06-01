<?php
// Simulasi data materi (bisa disimpan di database nantinya)
$materiList = [
    [
        'judul' => 'Candi Raksasa dari Zaman Dahulu Kala',
        'video' => 'https://www.youtube.com/embed/t1qK29XakvI',
        'deskripsi' => 'Candi raksasa. Berundak sampai menjulang. Indah dari kejauhan. Sungguh menakjubkan! Bangunan megah ciptaan anak Nusantara. Ia cerminan teknik arsitektur canggih dari kerajaan besar yang pernah berjaya. Bagaimanakah cerita di baliknya? Enjoy the video!'
    ],
    [
        'judul' => 'Kemunculan Ajaib Candi Gebang & Arca Kuno Berumur 1000 Tahun',
        'video' => 'https://www.youtube.com/embed/ID_VIDEO2',
        'deskripsi' => 'Deskripsi video 2.'
    ],
    [
        'judul' => 'Negeri Dihyang 1: Candi Arjuna & Potret Kelam Penjarahan Peninggalan Sejarah',
        'video' => 'https://www.youtube.com/embed/ID_VIDEO3',
        'deskripsi' => 'Deskripsi video 3.'
    ],
    [
        'judul' => 'Rahasia Candi Penataran, Mahakarya Lima Raja',
        'video' => 'https://www.youtube.com/embed/ID_VIDEO4',
        'deskripsi' => 'Deskripsi video 4.'
    ]
];

// Default materi ditampilkan
$selected = $materiList[0];
if (isset($_GET['materi'])) {
    $index = intval($_GET['materi']);
    if (isset($materiList[$index])) {
        $selected = $materiList[$index];
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Materi Pembelajaran</title>
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

        iframe {
            width: 100%;
            height: 300px;
        }

        .container {
            display: flex;
            gap: 20px;
        }

        .video-section {
            flex: 2;
        }

        .list-section {
            flex: 1;
            background-color: white;
            border: 1px solid #aaa;
        }

        .list-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-section li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .list-section li a {
            text-decoration: none;
            color: #000;
        }

        .description {
            background-color: white;
            padding: 10px;
            margin-top: 10px;
            min-height: 100px;
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
    <button onclick="location.reload()">Refresh Data</button>
    <h2>MATERI PEMBELAJARAN</h2>

    <div class="container">
        <div class="video-section">
            <iframe src="<?= $selected['video'] ?>" frameborder="0" allowfullscreen></iframe>
            <div class="description">
                <?= nl2br($selected['deskripsi']) ?>
            </div>
        </div>
        <div class="list-section">
            <ul>
                <?php foreach ($materiList as $index => $materi): ?>
                    <li><a href="?materi=<?= $index ?>"><?= htmlspecialchars($materi['judul']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>