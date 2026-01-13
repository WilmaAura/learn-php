<?php
    include '../config.php';

    $nim = $_GET['nim'];

    $sql = "select * from mhs where NIM = '$nim'";
    $result = $conn->query($sql);

    $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form method="POST" action="../controller/update.php">
    <input type="hidden" name="nim" value="<?= $data['NIM'] ?>">

    <label>NIM</label><br>
    <input type="text" value="<?= $data['NIM'] ?>" required><br><br>

    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>

    <label>Jurusan</label><br>
    <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" required><br><br>

    <label>Angkatan</label><br>
    <input type="number" name="angkatan" value="<?= $data['angkatan'] ?>" required><br><br>

    <button type="submit">Simpan Perubahan</button>
    <a href="index.php">Batal</a>
</form>
</body>
</html>