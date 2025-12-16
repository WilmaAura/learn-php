<?php
    require '../config.php';

    $NIM = $_POST['NIM'];
    $nama= $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    $hasil = "INSERT INTO mhs ('$NIM', '$nama', '$jurusan', '$angkatan')";

    $mysqli->query($hasil);

    header("location: ../view/list-mhs.php");
    exit;
?>
