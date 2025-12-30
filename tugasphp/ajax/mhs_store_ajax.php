<?php
include '../config.php'; 

// Matikan error reporting yang bisa merusak format JSON (opsional)
error_reporting(0);
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $NIM      = $_POST['NIM'];
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    
    // Gunakan filter sederhana agar lebih aman
    $sql = "INSERT INTO mhs (NIM, nama, jurusan, angkatan) 
            VALUES ('$NIM', '$nama', '$jurusan', '$angkatan')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode([
            "status" => "success",
            "message" => "Berhasil menambahkan data"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => $conn->error
        ]);
    }
    $conn->close();
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Akses tidak sah."
    ]);
}
// Jangan tambahkan echo atau teks lain di luar json_encode
?>