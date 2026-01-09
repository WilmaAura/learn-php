<?php
session_start();
include 'config.php';

/* DEMO: NIM statis dulu */
$nim = 'A11.2024.15841';

/* Query ambil KRS */
$sql = "
SELECT 
    mhs.NIM,
    mhs.nama,
    mk.kode_mk,
    mk.nama_mk,
    mk.sks
FROM input_krs ik
JOIN mhs ON ik.nim = mhs.NIM
JOIN matkul mk ON ik.matkul_id = mk.matkul_id
WHERE ik.nim = '$nim'
";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>KRS Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-5xl mx-auto mt-6 bg-white p-6 rounded shadow">

  <h2 class="text-xl font-bold mb-4">Kartu Rencana Studi (KRS)</h2>

  <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
    <div>Nama: <b>Wilma Auraruna Khalif</b></div>
    <div>NIM: <b><?= $nim ?></b></div>
  </div>

  <table class="w-full border text-sm">
    <thead class="bg-gray-200">
      <tr>
        <th class="border p-2">Kode MK</th>
        <th class="border p-2">Mata Kuliah</th>
        <th class="border p-2">SKS</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $total = 0;
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $total += $row['sks'];
              echo "<tr>
                      <td class='border p-2'>{$row['kode_mk']}</td>
                      <td class='border p-2'>{$row['nama_mk']}</td>
                      <td class='border p-2 text-center'>{$row['sks']}</td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='3' class='text-center p-4'>Belum ada KRS</td></tr>";
      }
      ?>
    </tbody>
    <tfoot>
      <tr class="bg-gray-100 font-bold">
        <td colspan="2" class="border p-2 text-right">Total SKS</td>
        <td class="border p-2 text-center"><?= $total ?></td>
      </tr>
    </tfoot>
  </table>

</div>

</body>
</html>
