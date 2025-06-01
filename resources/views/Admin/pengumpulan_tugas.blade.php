<?php
// Data pengumpulan tugas (bisa diganti dengan data dari database)
$pengumpulan = [
  "nama_tugas"    => "Peninggalan candi hindu budha",
  "konten_tugas"  => "Sebutkan dan jelaskan sejarah tentang candi Hindu dan Budha.",
  "jawaban_tugas" => "Candi Borobudur dibangun pada abad ke-8 oleh Dinasti Syailendra dan merupakan peninggalan agama Buddha. Candi Prambanan adalah candi Hindu terbesar di Indonesia dan dibangun pada abad ke-9 oleh Rakai Pikatan.",
  "penilaian"     => "" // Kosong = belum dinilai
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pengumpulan Tugas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="container my-5">
  <div class="row g-4">
    <div class="col-md-6">
      <div class="feature-box text-start p-4 shadow rounded bg-light">
        <h5>📤 Pengumpulan Tugas</h5>
        <ul class="list-unstyled mt-3">
          <li><strong>Nama Tugas:</strong> <?= htmlspecialchars($pengumpulan['nama_tugas']) ?></li>
          <li><strong>Konten Tugas:</strong> <?= htmlspecialchars($pengumpulan['konten_tugas']) ?></li>
          <li><strong>Jawaban Tugas:</strong><br> <?= nl2br(htmlspecialchars($pengumpulan['jawaban_tugas'])) ?></li>
          <li><strong>Penilaian:</strong> 
            <?= $pengumpulan['penilaian'] ? htmlspecialchars($pengumpulan['penilaian']) : '<em>(Belum dinilai)</em>' ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
