<?php
include '../config/config.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    $kategori = isset($_POST['kategori']) ? $_POST['kategori'] : [];

    $sql_update = "UPDATE berita SET judul='$judul', isi='$isi', penulis='$penulis' WHERE id=$id";
    
    if(mysqli_query($conn, $sql_update)){
        mysqli_query($conn, "DELETE FROM berita_kategori WHERE berita_id = $id");
        
        //Masukkan relasi kategori yang baru pakai perulangan FOR
        $count = count($kategori);
        for($i = 0; $i < $count; $i++){
            $id_kat = $kategori[$i];
            mysqli_query($conn, "INSERT INTO berita_kategori (berita_id, kategori_id) VALUES ('$id', '$id_kat')");
        }
        
        header("Location: ../view/berita_list.php");
    }
}
?>