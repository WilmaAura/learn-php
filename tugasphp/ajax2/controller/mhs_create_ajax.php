<?php
include '../../config.php';
$nama = $_POST['nama'];
$nim = $_POST['NIM'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

mysqli_query($conn, "INSERT INTO mhs (NIM, nama, jurusan, angkatan) VALUES ('$nim', '$nama', '$jurusan', '$angkatan')");
echo json_encode(['status' => true]);
?>