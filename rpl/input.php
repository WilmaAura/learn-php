<?php include 'config.php'; ?>

<h2>Input KRS</h2>

<form action="./controller/simpanData.php" method="POST">

    NIM:
    <input type="text" name="nim" required><br><br>

    Mata Kuliah:
    <select name="matkul_id" required>
        <?php
        $q = mysqli_query($conn, "SELECT * FROM matkul WHERE status='aktif'");
        while ($m = mysqli_fetch_assoc($q)) {
            echo "<option value='{$m['matkul_id']}'>
                    {$m['kode_mk']} - {$m['nama_mk']}
                  </option>";
        }
        ?>
    </select><br><br>

    Dosen:
    <select name="dos_id" required>
        <?php
        $q = mysqli_query($conn, "SELECT * FROM dosen WHERE status_dos='aktif'");
        while ($d = mysqli_fetch_assoc($q)) {
            echo "<option value='{$d['dos_id']}'>
                    {$d['nama_dos']}
                  </option>";
        }
        ?>
    </select><br><br>

    Ruang:
    <select name="ruang_id" required>
        <?php
        $q = mysqli_query($conn, "SELECT * FROM ruang");
        while ($r = mysqli_fetch_assoc($q)) {
            echo "<option value='{$r['ruang_id']}'>
                    {$r['jenis_waktu']} (Kuota {$r['kuota']})
                  </option>";
        }
        ?>
    </select><br><br>

    Semester:
    <select name="sem_id" required>
        <?php
        $q = mysqli_query($conn, "SELECT * FROM semester");
        while ($s = mysqli_fetch_assoc($q)) {
            echo "<option value='{$s['sem_id']}'>
                    {$s['semester']} {$s['thn_ajar']}
                  </option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Simpan KRS</button>

</form>
