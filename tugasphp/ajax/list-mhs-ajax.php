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
    <a href="index.php" class="back-link">&larr; Kembali ke Daftar Mahasiswa</a>
    <h2>Input Data Mahasiswa Baru</h2>

    <form id="formTambahMhs">
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
                // Output data dari setiap baris
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["NIM"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["jurusan"] . "</td>";
                    echo "`<td>" . $row["angkatan"] . "</td>";
                    echo "<td class='actions'>";
                    
                    echo "<a href='edit.php?nim=" . $row["NIM"] . "' class='edit'>Edit</a>";
                    
                    echo "<a href='../controller/delete.php?nim=" . $row["NIM"] . 
                    "'class='delete' onclick='return confirm(\"Anda yakin ingin menghapus data NIM: " . $row["NIM"] . "?\");'>
                            Delete
                          </a>";                    
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data mahasiswa.</td></tr>";
            }
            ?>
        </tbody>
    </table>

        <a href="./input.php">Input data mahasiswa</a>
    <?php
    $conn->close();
    ?>
        <script>
            $(function(){
                //Trigger ketika user klik submit
                // akan ambil data dari id formtambahmhs lalu dikirim ke backend
                $('#formTambahMhs').submit(function(e)){
                    e.preventDefault(); //biar ga reload ketika click submit
                    

                    $.ajax({
                        url: 'mhs_store_ajax.php',
                        type: 'POST',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function(res){
                            location.reload
                        }
                    })
                }
            })
            $('#btn-hapus').click(function(e){
                if(!confirm("Yakin hapus data?")) return;
                let nim = $(this).data('nim');

                $.ajax({
                    url: 'mhs_delete_ajax.php',
                    type: 'GET',
                    data: {nim: nim},
                    success: function(res){
                        location.reload()
                    } 
                })
            })
        </script>
</body>
</html>