<?php

//pernyataan if yang digunakan untuk memeriksa apakah metode 
// yang digunakan untuk mengakses halaman ini adalah metode POST

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "<h1>Data Mahasiswa </h1>";
    $idMhs = $_POST['id_mhs']; //To collect ID values from input section
    if (!empty($idMhs) && is_numeric($idMhs)){
        echo "ID: ". htmlspecialchars($idMhs) . "<br>";
    }else {
        echo "ID: Tidak ada Input <br>";
    }
    $namaMhs = $_POST['nama_mhs'];
    if (!empty($namaMhs) && is_numeric($namaMhs)){
        echo "ID: ". htmlspecialchars($namaMhs) . "<br>";
    }else {
        echo "ID: Tidak ada Input <br>";
    }
    

    //$emailMhs= $_POST['email_mhs'];

    //Menampilkan Data Msahasiswa
    echo "<h1>Data Mahasiswa </h1>"; 
    echo "ID Mahasiswa: " . htmlspecialchars($idMhs). "<br>"; //Digunakan untuk melindungi aplikasi dari serangan XSS dengan mengonversi karakter khusus HTML menjadi entitas HTML
    echo "Nama Mahasiswa: " . htmlspecialchars($namaMhs). "<br>";
    echo "Email Mahasiswa: " . htmlspecialchars($emailMhs). "<br>";


}

