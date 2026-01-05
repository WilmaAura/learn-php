<?php
    include '../config.php';

    if(!isset($_GET['nim'])){
        echo "NIM tidak ditemukan";
        exit;
    }

    $nim = $_GET['nim'];

    $sql = "select * from mhs where NIM = '$nim'";
    $result = $conn->query($sql);

    if($result->num_rows == 0){
        echo "data mahasiswa tidak ditemukan";
    }

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

<form method="POST" action="edit.php">
    <!-- NIM dikirim tapi tidak bisa diubah -->
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
    <a href="../view/index.php">Batal</a>
</form>

</body>
</html>