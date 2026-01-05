<?php
    include '../config.php';
    
    if (isset($_POST['nim'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $angkatan = $_POST['angkatan'];
        $sql = "UPDATE mhs SET nama = '$nama', jurusan = '$jurusan', angkatan = '$angkatan' where nim='$nim'";
        $conn->query($sql);

        # Feedback ketika berhasil`
        if ($conn->query($sql) === TRUE){
            header("Location: ../view/edit.php?status_edit=success");
            exit;
        }else{
            echo "Gagal Update:" . $conn->error;
        }
    }    
    $conn->close();

?>