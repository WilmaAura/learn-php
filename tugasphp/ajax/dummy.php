<?php
include '../config.php';
/* Wilma Auraruna Khalif */
// Query untuk mengambil semua data dari tabel mahasiswa
$sql = "SELECT NIM, nama, jurusan, angkatan FROM mhs ORDER BY Angkatan DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - Listing Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <div class="container">
    <h2>Input Data Mahasiswa Baru</h2>

    <form id='formTambahMhs' method="POST">
            <div class="form-group">
                <label for="NIM">NIM:</label>
                <input type="text" id="NIM" name="NIM" required maxlength="100">
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required maxlength="100">
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Manajemen">Manajemen</option>
                </select>
            </div>

            <div class="form-group">
                <label for="angkatan">Angkatan (Tahun):</label>
                <input type="number" id="angkatan" name="angkatan" required min="2000" max="<?php echo date("Y"); ?>">
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>
</div>
    <h2 style="text-align: center;">Daftar Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $nim_id = trim($row['NIM']); 
            
            echo "<tr id='row-" . $nim_id . "'>"; 
            echo "<td>" . $row["NIM"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["jurusan"] . "</td>";
            echo "<td>" . $row["angkatan"] . "</td>";
            echo "<td class='actions'>";
            
            echo "<a href='edit.php?nim=" . $row["NIM"] . "' class='edit'>Edit</a>";
            echo '<a href="#" class="delete" data-nim="' . $nim_id . '">Delete</a>';
            
            echo "</td>";
            echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data mahasiswa.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    $conn->close();
    ?>
        <script>
$(document).ready(function() {
    $('#formTambahMhs').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'mhs_store_ajax.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(res) {
                if (res.status === 'success') {
                    alert("Data berhasil disimpan!");
                    location.reload(); // Reload untuk melihat data baru
                } else {
                    alert("Gagal: " + res.msg);
                }
            },
            error: function() {
                alert("Terjadi kesalahan pada server.");
            }
        });
    });

    $('body').on('click', '.delete', function(e) {
        e.preventDefault();
        let nim = $(this).data('nim');
        
        if (!confirm("Yakin hapus data dengan NIM " + nim + "?")) return;

        $.ajax({
            url: 'mhs_delete_ajax.php',
            type: 'GET',
            data: { nim: nim },
            dataType: 'json',
            success: function(res) {
                if (res.status === 'success') {
                    $('#row-' + nim).fadeOut(300, function() {
                        $(this).remove();
                    });
                } else {
                    alert(res.msg);
                }
            }
        });
    });
});
</script>
</body>
</html>