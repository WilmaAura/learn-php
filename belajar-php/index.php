<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa</h1>

    <form action="./simpan_data.php" method = "post">
        <!-- Id Mahasiswa -->
        <label for="id_mhs">ID Mahasiswa</label>
        <br>
        <input type="text" name="id_mhs" placeholder="Masukan ID Mahasiswa">
        <br>
        
        <!-- Nama Mahasiswa -->
        <label for="nama_mhs">Nama Mahasiswa</label>
        <br>
        <input type="text" name="nama_mhs" placeholder="Masukan Nama Mahasiswa">
        <br>
        <!-- Email Mahasiswa -->
        <label for="email_mhs">Email Mahasiswa</label>
        <br>
        <input type="text" name="email_mhs" placeholder="Masukan Email Mahasiswa">

        <!-- Tombol Data Mahasiswa -->
         <br>
         <input type="submit" value="Simpan Data">
    </form>
</body>
</html>