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
        <br>
        <!-- Program studi -->
        <label for="">Program Studi</label>
        <br>
        <select name="program_studi" >
            <option value="">Pilih Program Studi</option>
            <option value="Ilmu Komputer">Ilmu Komputer</option>
            <option value="Administrasi Publik">Administrasi Publik</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Hukum">Hukum</option>
        </select>
        <!-- Tombol Simpan Data Mahasiswa -->
         <br>
         <!-- Hobi -->
          <label for="">Hobi</label>
          <br>
          <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
          <input type="checkbox" name="hobi[]" value="Membaca"> Menulis
          <input type="checkbox" name="hobi[]" value="Membaca"> Berenang
          <br>

         <input type="submit" value="Simpan Data">

    </form>
</body>
</html>