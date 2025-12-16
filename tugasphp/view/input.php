    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Data Mahasiswa Baru</title>
    <link rel="stylesheet" href="../style/styleInput.css">
        
    </head>
    <body>

    <div class="container">
        <a href="index.php" class="back-link">&larr; Kembali ke Daftar Mahasiswa</a>
        <h2>Input Data Mahasiswa Baru</h2>

        <form action="simpanData.php" method="POST">
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

    </body>
    </html>