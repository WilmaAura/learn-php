<?php
include '../config.php';

$nim       = $_POST['nim'];
$matkul_id = $_POST['matkul_id'];
$dos_id    = $_POST['dos_id'];
$ruang_id  = $_POST['ruang_id'];
$sem_id    = $_POST['sem_id'];

$query = "INSERT INTO input_krs 
(nim, matkul_id, dos_id, ruang_id, sem_id, tgl_pengajuan, status_verifikasi)
VALUES
('$nim', '$matkul_id', '$dos_id', '$ruang_id', '$sem_id', CURDATE(), 'pending')";

if (mysqli_query($conn, $query)) {
    echo "KRS berhasil disimpan <br>";
    echo "<a href='input.php'>Kembali</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
