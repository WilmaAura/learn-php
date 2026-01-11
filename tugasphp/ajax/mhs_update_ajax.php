<?php
include '../config.php';
header('Content-Type: application/json');

$nim      = $_POST['NIM'];
$nama     = $_POST['nama'];
$jurusan  = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

$sql = "UPDATE mhs SET 
        nama='$nama',
        jurusan='$jurusan',
        angkatan='$angkatan'
        WHERE NIM='$nim'";

if ($conn->query($sql)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode([
        'status' => 'error',
        'msg' => $conn->error
    ]);
}

$conn->close();
