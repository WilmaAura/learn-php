<?php
include '../config/config.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    
    $kategori = isset($_POST['kategori']) ? $_POST['kategori'] : [];

    $query_b = "INSERT INTO berita (judul, isi, penulis) VALUES ('$judul', '$isi', '$penulis')";
    
    if (mysqli_query($conn, $query_b)) {
        // Ambil id berita
        $berita_id = mysqli_insert_id($conn);

        if (!empty($kategori)) {
            foreach ($kategori as $kategori_id) {
                $query_relasi = "INSERT INTO berita_kategori (berita_id, kategori_id) VALUES ('$berita_id', '$kategori_id')";
                mysqli_query($conn, $query_relasi);
            }
        }

        header("Location: ../view/berita_add.php?status=sukses");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>