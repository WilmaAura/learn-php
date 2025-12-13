<?php
   include '../exercise1/config.php';
   if (isset($_POST['simpan'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $emailMhs = $_POST['email_mhs'];
        $angkatan = $_POST['angkatan'];
        $prodi = $_POST['prodi'];
        $hobi = $_POST['hobi'];
        $jns_kel= $_POST['jenis_kel'];

        $sql_insert = "INSERT INTO mhs VALUES ('$nim', '$nama', '$no_hp' ,'$emailMhs', '$angkatan' , '$hobi', '$jenis_kel')";

        if (mysqli->query($sql_insert) == TRUE){
            echo "Data Mahasiswa berhasil ditambahkan ke database <br>";
            echo "<a href= 'get_list_mhs.php'>Lihat Daftar</a>";
        } else {
            echo "Error" . $sql_insert . "<br>" . $mysqli->error;
        }
    }
    else {
        echo "Akses ditolak. Silakan isi form terlebih dahulu.";
    }

    mysqli_close($mysqli)

?>
