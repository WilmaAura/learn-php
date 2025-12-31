<?php
include '../config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $NIM      = $_POST['NIM'];
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    
    $sql = "INSERT INTO mhs (NIM, nama, jurusan, angkatan) 
            VALUES ('$NIM', '$nama', '$jurusan', '$angkatan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data mahasiswa baru berhasil ditambahkan! Mengalihkan...";
        header("Location: index.php?status=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "Akses tidak sah.";
}

echo json_encode ([
    "status" => "success"
])
?>