<?php
include 'config.php'; 

//Cek apakah data form telah dikirim (metode POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Ambil data dari form dan bersihkan 
    // Menggunakan real_escape_string untuk membantu mencegah SQL Injection sederhana
    $NIM      = $conn->real_escape_string($_POST['NIM']);
    $nama     = $conn->real_escape_string($_POST['nama']);
    $jurusan  = $conn->real_escape_string($_POST['jurusan']);
    $angkatan = $conn->real_escape_string($_POST['angkatan']);
    
    //Buat query INSERT
    $sql = "INSERT INTO mhs (NIM, nama, jurusan, angkatan) 
            VALUES ('$NIM', '$nama', '$jurusan', '$angkatan')";

    //Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "Data mahasiswa baru berhasil ditambahkan! Mengalihkan...";
        header("Location: index.php?status=success");
        exit();
    } else {
        //Jika gagal tampilkan error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //Tutup koneksi
    $conn->close();

} else {
    echo "Akses tidak sah.";
}
?>