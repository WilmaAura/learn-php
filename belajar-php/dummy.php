<?php
// 1. Panggil file koneksi (agar variabel $mysqli tersedia)
include 'config.php';

// Pastikan data dikirim melalui method POST
if (isset($_POST['simpan'])) {
    
    // 2. Ambil data dari formulir
    // *Penting*: Disarankan menggunakan prepared statement untuk keamanan (SQL Injection)
    $nim      = $_POST['nim'];
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    

    // 3. Buat SQL Query untuk memasukkan data (INSERT INTO)
    $sql_insert = "INSERT INTO mahasiswa (nim, nama, jurusan, angkatan) 
                   VALUES ('$nim', '$nama', '$jurusan', '$angkatan')";

    // 4. Eksekusi Query
    if ($mysqli->query($sql_insert) === TRUE) {
        // Jika penyimpanan berhasil
        echo "Data Mahasiswa **" . $nama . "** berhasil ditambahkan ke database.<br>";
        echo "<a href='get_list_mhs.php'>Lihat Daftar Mahasiswa</a>";
        
    } else {
        // Jika terjadi error saat eksekusi query
        echo "Error: " . $sql_insert . "<br>" . $mysqli->error;
    }
    
} else {
    // Jika file diakses langsung tanpa submit form
    echo "Akses ditolak. Silakan isi form terlebih dahulu.";
}

// Tutup koneksi setelah selesai
mysqli_close($mysqli);
?>