<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $NIM      = $_POST['NIM'];
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    $sql = "INSERT INTO mhs (NIM, nama, jurusan, angkatan)
            VALUES ('$NIM', '$nama', '$jurusan', '$angkatan')";

    if ($conn->query($sql)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode([
            'status' => 'error',
            'msg' => $conn->error
        ]);
    }
}
$conn->close();
