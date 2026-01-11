<?php
include '../../config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['NIM'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

mysqli_query($conn, "UPDATE mhs SET nama='$nama', NIM='$nim', jurusan='$jurusan', angkatan='$angkatan' WHERE NIM='$nim'");
?>