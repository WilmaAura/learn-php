<?php include '../config/config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>list berita</title></head>
<body>
    <h2>Daftar Berita Game</h2>
    <a href="berita_add.php">[+] Tambah Berita</a><br><br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tanggal Publish</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        // 1. Ambil semua data dari tabel berita saja
        $ambil_berita = mysqli_query($conn, "SELECT * FROM berita");
        
        while($row = mysqli_fetch_assoc($ambil_berita)){
            $id_berita = $row['id'];
        ?>
            <tr>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['penulis']; ?></td>
                <td><?= $row['tanggal_publish']; ?></td>
                <td>
                    <?php
                    // 2. Query lagi untuk cari kategori KHUSUS berita ini saja
                    $sql_kat = "SELECT k.nama_kategori 
                                FROM berita_kategori b
                                JOIN kategori k ON b.kategori_id = k.id
                                WHERE b.berita_id = $id_berita";
                    
                    $ambil_kat = mysqli_query($conn, $sql_kat);
                    
                    // Kita tampilkan satu-satu namanya
                    while($rk = mysqli_fetch_assoc($ambil_kat)){
                        echo $rk['nama_kategori'] . ", ";
                    }
                    ?>
                </td>
                <td>
                    <a href="berita_edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                    <button class="btn-hapus" data-id="<?=$id_berita; ?>">Hapus</button>
                </td>
            </tr>
        <?php } ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
        $('.btn-hapus').click(function(){ 
            if(confirm('Yakin mau hapus berita ini?')) { 
                var idBerita = $(this).data('id');
                $.ajax({
                    url: '../controller/berita_delete.php',
                    type: 'GET',
                    data: {id: idBerita},
                    success: function(response){ 
                        if (response === 'success'){
                            alert('Data berhasil dihapus!');
                            location.reload();
                        } else {
                            alert('Gagal menghapus data: ' + response);
                        }
                    }
                });
            }
        });
    });
</script>
</body>
</html>