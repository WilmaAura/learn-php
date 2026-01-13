<?php 
include '../config/config.php'; 
$id = $_GET['id'];

$query_berita = mysqli_query($conn, "SELECT * FROM berita WHERE id = $id");
$data = mysqli_fetch_assoc($query_berita);

$query_kat = mysqli_query($conn, "SELECT kategori_id FROM berita_kategori WHERE berita_id = $id");
$kat_terpilih = [];
while($kt = mysqli_fetch_assoc($query_kat)) {
    $kat_terpilih[] = $kt['kategori_id'];
}
?>

<!DOCTYPE html>
<html>
<head><title>edit berita</title></head>
<body>
    <h2>Edit Berita Game</h2>
    <form action="../controller/berita_update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        Judul: <br><input type="text" name="judul" value="<?= $data['judul']; ?>" required><br><br>
        Isi Berita: <br><textarea name="isi" required><?= $data['isi']; ?></textarea><br><br>
        Penulis: <br><input type="text" name="penulis" value="<?= $data['penulis']; ?>" required><br><br>
        
        Kategori: <br>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM kategori");
        while($rk = mysqli_fetch_assoc($query)){
            echo "<input type='checkbox' name='kategori[]' value='".$rk['id']."'> ".$rk['nama_kategori']."<br>";
        }
        ?>
        <br><button type="submit" name="update">Update Berita</button>
    </form>
</body>
</html>