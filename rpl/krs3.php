<?php
// Simulasi Session (Anggap saja sudah login)
session_start();
$_SESSION['login'] = true; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulasi Input KRS - Wilma</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<nav class="bg-blue-800 text-white p-4 shadow-md flex justify-between items-center">
  <div class="flex items-center gap-2">
    <span class="font-bold tracking-wider text-lg">INPUT KRS v2.1</span>
  </div>
  <div class="flex items-center gap-4">
    <span class="text-xs italic bg-blue-700 px-2 py-1 rounded">Semester Ganjil 2025/2026</span>
    <a href="logout.php" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm transition">Logout</a>
  </div>
</nav>

<div class="max-w-6xl mx-auto mt-8 mb-10 px-4">
  
  <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
    <h2 class="text-2xl font-bold text-gray-700 mb-6 border-b pb-2">Form Input KRS</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 bg-blue-50 p-4 rounded-lg border border-blue-100">
      <div>
        <p class="text-xs text-blue-600 uppercase font-semibold">Nama Mahasiswa</p>
        <p class="font-bold">WILMA AURARUNA KHALIF</p>
      </div>
      <div>
        <p class="text-xs text-blue-600 uppercase font-semibold">NIM</p>
        <p class="font-bold">A11.2024.15841</p>
      </div>
      <div>
        <p class="text-xs text-blue-600 uppercase font-semibold">IPK Terakhir</p>
        <p class="font-bold text-green-600">3.71</p>
      </div>
      <div class="bg-yellow-100 p-2 rounded border border-yellow-200">
        <p class="text-xs text-yellow-700 uppercase font-semibold">Sisa Kuota SKS</p>
        <p class="text-2xl font-black text-yellow-800" id="sisaSks">24</p>
      </div>
    </div>

    <div class="overflow-x-auto">
      <form id="krsForm">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gray-100 border-b-2 border-gray-200">
              <th class="p-3 text-center">Pilih</th>
              <th class="p-3">Kode / Mata Kuliah</th>
              <th class="p-3 text-center">SKS</th>
              <th class="p-3">Dosen Pengampu</th>
              <th class="p-3 text-center">Jadwal 1</th>
              <th class="p-3 text-center">Jadwal 2</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <?php
            $matkul = [
                ["A11.64503", "SISTEM INFORMASI", 3, "Dr. Budi Setiawan, M.Kom", "RABU 07.00", "G.2.4"],
                ["A11.64306", "SISTEM OPERASI", 3, "Ir. Siti Aminah, M.T", "SENIN 09.30", "H.5.9"],
                ["A11.64303", "REKAYASA PERANGKAT LUNAK", 3, "Andi Wijaya, M.Cs", "JUMAT 12.30", "H.3.9"],
                ["A11.64302", "LOGIKA INFORMATIKA", 3, "Rina Fatmawati, M.Si", "KAMIS 12.30", "H.3.8"],
                ["A11.64301", "PROBABILITAS DAN STATISTIK", 3, "Drs. Eko Prasetyo", "KAMIS 07.00", "H.4.9"],
                ["A11.64305", "PEMROGRAMAN BERBASIS WEB", 2, "Hendra Kurnia, M.Kom", "SELASA 14.10", "D.2.J"],
                ["A11.64304", "BASIS DATA", 4, "M. Lukman, Ph.D", "SELASA 07.00", "JUMAT 07.00"],
                ["N201706", "PENDIDIKAN KEWARGANEGARAAN", 2, "Dra. Sulastri", "SELASA 10.20", "Kulino"],
            ];

            foreach ($matkul as $row): ?>
            <tr class="hover:bg-gray-50 transition">
              <td class="p-3 text-center">
                <input type="checkbox" value="<?= $row[2]; ?>" 
                       class="w-5 h-5 cursor-pointer accent-blue-600"
                       onclick="hitungSks(this)">
              </td>
              <td class="p-3">
                <span class="block text-xs font-mono text-gray-500"><?= $row[0]; ?></span>
                <span class="font-semibold text-blue-700"><?= $row[1]; ?></span>
              </td>
              <td class="p-3 text-center font-bold"><?= $row[2]; ?></td>
              <td class="p-3 text-sm italic text-gray-600"><?= $row[3]; ?></td>
              <td class="p-3 text-center text-xs bg-green-50"><?= $row[4]; ?></td>
              <td class="p-3 text-center text-xs bg-orange-50"><?= $row[5]; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <div class="mt-8 flex justify-end gap-4">
          <button type="reset" onclick="location.reload()" class="px-6 py-2 border border-gray-300 rounded text-gray-600 hover:bg-gray-100 transition">Reset</button>
          <button type="button" onclick="simpanKRS()" class="px-8 py-2 bg-blue-700 text-white font-bold rounded shadow-lg hover:bg-blue-800 transition">Simpan KRS Sekarang</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
let sisa = 24;

function hitungSks(cb) {
  let sks = parseInt(cb.value);
  
  if (cb.checked) {
    if (sisa - sks < 0) {
      alert("⚠️ Maaf, Sisa SKS tidak mencukupi untuk mengambil mata kuliah ini!");
      cb.checked = false;
    } else {
      sisa -= sks;
    }
  } else {
    sisa += sks;
  }

  document.getElementById("sisaSks").innerText = sisa;
}

function simpanKRS() {
  const totalTerambil = 24 - sisa;
  if (totalTerambil === 0) {
    alert("Pilih minimal satu mata kuliah!");
  } else {
    alert("✅ Berhasil! Anda telah mengambil " + totalTerambil + " SKS. Data sedang dikirim ke server...");
  }
}
</script>

</body>
</html>