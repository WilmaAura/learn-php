<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Input KRS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<div class="bg-gray-800 text-white p-4 flex justify-between">
  <div class="font-bold">INPUT KRS v2.1</div>
  <a href="logout.php" class="text-sm">Logout</a>
</div>

<div class="max-w-5xl mx-auto mt-6 bg-white p-6 rounded shadow">

  <h2 class="text-xl font-bold mb-4">Input KRS Semester Ganjil</h2>

  <!-- INFO MAHASISWA (DUMMY) -->
  <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
    <div>Nama: <b>WILMA AURARUNA KHALIF</b></div>
    <div>NIM: <b>A11.2024.15841</b></div>
    <div>IPK: <b>3.71</b></div>
    <div>Sisa SKS: <b id="sisaSks">24</b></div>
  </div>

  <form method="POST">
    <table class="w-full border text-sm">
      <thead class="bg-gray-200">
        <tr>
          <th class="border p-2">Pilih</th>
          <th class="border p-2">Kode</th>
          <th class="border p-2">Mata Kuliah</th>
          <th class="border p-2">SKS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border text-center">
            <input type="checkbox" value="3" onclick="hitungSks(this)">
          </td>
          <td class="border p-2">A11.64503</td>
          <td class="border p-2">Sistem Informasi</td>
          <td class="border p-2">3</td>
        </tr>
        <tr>
          <td class="border text-center">
            <input type="checkbox" value="3" onclick="hitungSks(this)">
          </td>
          <td class="border p-2">A11.64306</td>
          <td class="border p-2">Sistem Operasi</td>
          <td class="border p-2">3</td>
        </tr>
      </tbody>
    </table>

    <button type="button" onclick="alert('KRS disimpan (demo)')"
      class="mt-6 bg-green-600 text-white px-6 py-2 rounded">
      Simpan KRS
    </button>
  </form>

</div>

<script>
let sisa = 24;

function hitungSks(cb) {
  let sks = parseInt(cb.value);
  sisa = cb.checked ? sisa - sks : sisa + sks;

  if (sisa < 0) {
    alert("SKS melebihi batas");
    cb.checked = false;
    sisa += sks;
  }

  document.getElementById("sisaSks").innerText = sisa;
}
</script>

</body>
</html>
