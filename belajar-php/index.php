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
        <label for="nim">NIM Mahasiswa</label>
        <br>
        <input type="text" name="nim" placeholder="Masukan NIM Mahasiswa">
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
         <!-- No Hp -->
        <label for="no_hp">No Hp</label>
        <br>
        <input type="text" name="no_hp" placeholder="Masukan No Hp">
        <br>
        
        <!-- Angkatan -->
        <label for="angkatan">Angkatan</label>
        <br>
        <input type="text" name="angkatan" placeholder="Masukan Nama Angkatan">
        <br>
        <!-- Program studi -->
        <label for="prodi">Program Studi</label>
        <br>
        <select name="program_studi" >
            <option value="">Pilih Program Studi</option>
            <option value="Ilmu Komputer">Ilmu Komputer</option>
            <option value="Administrasi Publik">Administrasi Publik</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Hukum">Hukum</option>
        </select>
         <br>
         <!-- Hobi -->
          <label for="hobi">Hobi</label>
          <br>
          <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
          <input type="checkbox" name="hobi[]" value="Menulis"> Menulis
          <input type="checkbox" name="hobi[]" value="Berenang"> Berenang
          <br>
        <!-- Jenis Kelamin -->
         <label for="jenis_kelamin">Jenis Kelamin</label>
         <br>
         <input type="radio" name="jenis_klmn" value="Laki-laki"> Laki-laki
         <input type="radio" name="jenis_klmn" value="Perempuan"> Perempuan
         <br>
        <!-- Tombol Simpan Data Mahasiswa -->
         <input type="submit" value="Simpan Data">
         
    </form>
</body>
</html>