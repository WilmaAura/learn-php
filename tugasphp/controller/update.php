<?php
include '../config.php';

if (!isset($_POST['nim'])) {
    echo "NIM tidak ditemukan";
    exit;
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

$sql = "UPDATE mhs 
        SET nama='$nama', jurusan='$jurusan', angkatan='$angkatan' 
        WHERE NIM='$nim'";

if ($conn->query($sql) === TRUE) {
    header("Location: ../view/index.php?update=success");
    exit;
} else {
    echo "Gagal update: " . $conn->error;
}
