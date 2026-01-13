<!DOCTYPE html>
<html lang="id">
<head>
    <title>add berita</title>
</head>
<body>
    <h2>Tambah Berita Baru</h2>
    <form action="../controller/berita_store.php" method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Isi Berita:</label><br>
        <textarea name="isi" rows="5" required></textarea><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" required><br><br>
        <button type="submit" name="submit">Simpan Berita</button>
        <label><b>Pilih Kategori:</b></label><br>
            <?php
            include '../config/config.php'; 
            $res = mysqli_query($conn, "SELECT * FROM kategori");
            while($row = mysqli_fetch_assoc($res)) {
                echo "<input type='checkbox' name='kategori[]' value='".$row['id']."'> " . $row['nama_kategori'] . "<br>";
            }
            ?>
        <br>
    </form>
</body>
</html>