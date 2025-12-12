<?php
    $host = "localhost";
    $user = "root";   // <-- Ganti ke user default
    $pass = "";       // <-- Ganti ke password default (KOSONG)
    $db = "akademik_15841"; 

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){
        // Jika gagal, akan ada pesan error yang JELAS
        die("Connection Failed: " . $conn->connect_error); 
    }
    
    echo "Koneksi Berhasil!"; // Jika ini muncul, berarti sudah OK.
?>