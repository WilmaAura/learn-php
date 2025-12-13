<?php
// Ganti path include jika perlu!
include '../exercise1/config.php'; 

if (isset($_POST['simpan']) || isset($_POST['nim'])) { // Cek tombol submit atau cek keberadaan nim
    
    // 1. Ambil & Sanitize Data POST (8 Input)
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs']; 
    $email = $_POST['email_mhs']; // Variabel diperbaiki
    $no_hp = $_POST['no_hp'];
    $angkatan = $_POST['angkatan'];
    $prodi = $_POST['program_studi'];
    
    // Gabungkan array hobi menjadi string
    $hobi = isset($_POST['hobi']) ? implode(', ', $_POST['hobi']) : ''; 
    $jenis_kelamin = $_POST['jenis_klmn'];

    // 2. Query INSERT (Harus menyebutkan kolom dan urutan nilai harus sesuai)
    $sql_insert = "INSERT INTO mhs (nim, nama, email_mhs, no_hp, angkatan, prodi, hobi, jenis_kelamin) 
                   VALUES ('$nim', '$nama', '$email', '$no_hp', '$angkatan', '$prodi', '$hobi', '$jenis_kelamin')";

    // 3. Eksekusi Query
    if ($mysqli->query($sql_insert) === TRUE) {
        echo "Data Mahasiswa **$nama** berhasil ditambahkan ke database.<br>";
        echo "<a href='get_list_mhs.php'>Lihat Daftar Mahasiswa</a>";
    } else {
        echo "Error: Gagal menyimpan data!<br>" . $mysqli->error;
    }
    
    mysqli_close($mysqli); // Tutup koneksi di sini
    
} else {
    echo "Akses ditolak. Silakan isi form terlebih dahulu.";
}
// Hapus mysqli_close($mysqli) yang ada di baris 26 karena sudah ada di dalam if/else di atas.
?>