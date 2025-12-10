<?php

//pernyataan if yang digunakan untuk memeriksa apakah metode 
// yang digunakan untuk mengakses halaman ini adalah metode POST

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $idMhs = $_POST['id_mhs'];
    $namaMhs = $_POST['nama_mhs'];
    $emailMhs= $_POST['email_mhs'];

    //Menampilkan Data Mahasiswa
    echo "<h1>Data Mahasiswa </h1>";
    
}