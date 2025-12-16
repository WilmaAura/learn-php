<?php
    require "../config.php";

    //Ambil dari html
    // Methodnya GET artinya ambil dari paramter
    // Simpan ke variable php
    $NIM = $_GET['NIM'];

    $hasil = "DELETE FROM mhs WHERE NIM = $NIM";
    $mysqli->query($hasil);

    // redirect kembali ke list mhs
    header("location: ../view/list-mhs.php");
    exit;
?>