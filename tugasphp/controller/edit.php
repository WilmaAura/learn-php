<?php
    include '../config.php';
    
    if (isset($_POST['nim'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $angkatan = $_POST['angkatan'];
    }    
    $sql = "UPDATE mhs SET nama = '$nama', jurusan = '$jurusan', angkatan = '$angkatan'where nim='$nim'";

    $conn->close();
?>