<?php
include '../config.php';
header('Content-Type: application/json');

if (!isset($_GET['nim'])) {
    echo json_encode([
        'status' => 'error',
        'msg' => 'NIM tidak ditemukan'
    ]);
    exit;
}

$nim = trim($_GET['nim']);

$sql = "DELETE FROM mhs WHERE NIM = '$nim'";
$result = $conn->query($sql);

if ($result && $conn->affected_rows > 0) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode([
        'status' => 'error',
        'msg' => 'Data tidak ditemukan atau gagal dihapus'
    ]);
}

$conn->close();
