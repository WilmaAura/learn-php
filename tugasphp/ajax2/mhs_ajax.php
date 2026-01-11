<!DOCTYPE html>
<html>
<head>
    <title>Tugas Kuliah Ana</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Data Mahasiswa</h2>

    <div style="margin-bottom: 20px;">
        <input type="hidden" id="id_mhs"> <input type="text" id="nama" placeholder="Nama Mahasiswa"><br>
        <input type="text" id="NIM" placeholder="NIM"><br>
        <input type="text" id="jurusan" placeholder="Jurusan"><br>
        <input type="number" id="angkatan" name="angkatan" required min="2000" max="<?php echo date("Y"); ?>">
        <br>
        <button id="btn-tambah" onclick="simpanData()">Tambah Data</button>
        <button id="btn-ubah" onclick="ubahData()" style="display:none;">Simpan Perubahan</button>
    </div>

    <table border="1" cellpadding="10" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody id="tabel-mhs">
            </tbody>
    </table>

    <script>
        // 1. Fungsi supaya pas halaman dibuka, data langsung muncul
        $(document).ready(function() {
            tampilData();
        });

        function tampilData() {
            $.ajax({
                url: 'mhs_read_ajax.php',
                type: 'GET',
                success: function(respon) {
                    // Masukkan hasil dari PHP tadi ke dalam tbody
                    $('#tabel-mhs').html(respon);
                }
            });
        }

        // 2. Fungsi Tambah Data
        function simpanData() {
            var nama_mhs = $('#nama').val();
            var NIM_mhs = $('#NIM').val();
            var jur = $('#jurusan').val();
            var angkatan = $('#angkatan').val();

            $.ajax({
                url: 'mhs_create_ajax.php',
                type: 'POST',
                data: {nama: nama_mhs, NIM: NIM_mhs, jurusan: jur, angkatan: angkatan},
                success: function(respon) {
                    alert("Data berhasil ditambah!");
                    tampilData(); // Refresh tabel tanpa reload
                    $('#nama').val(''); $('#NIM').val(''); $('#jurusan').val(''); $('#angkatan').val(''); // Kosongkan form
                }
            });
        }

        // 3. Fungsi Hapus
        function hapusData(id_mhs) {
            var tanya = confirm("Yakin mau hapus?");
            if (tanya) {
                $.ajax({
                    url: 'mhs_delete_ajax.php',
                    type: 'POST',
                    data: {id: id_mhs},
                    success: function() {
                        tampilData();
                    }
                });
            }
        }

        // 4. Fungsi ambil data buat ditaruh di form (sebelum diedit)
        function editData(id_mhs) {
            $.ajax({
                url: 'mhs_detail_ajax.php',
                type: 'GET',
                data: {id: id_mhs},
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#NIM').val(data.NIM);
                    $('#jurusan').val(data.jurusan);
                    $('#angkatan').val(data.angkatan);
                    
                    // Ganti tombol
                    $('#btn-tambah').hide();
                    $('#btn-ubah').show();
                }
            });
        }

        // 5. Fungsi Update (Simpan perubahan)
        function ubahData() {
            $.ajax({
                url: 'mhs`_update_ajax.php',
                type: 'POST',
                data: {
                    id: $('#id_mhs').val(),
                    nama: $('#nama').val(),
                    NIM: $('#NIM').val(),
                    jurusan: $('#jurusan').val()
                    jurusan: $('#angkatan').val()
                },
                success: function() {
                    alert("Data berhasil diupdate!");
                    tampilData();
                    $('#btn-tambah').show();
                    $('#btn-ubah').hide();
                    $('#nama').val(''); $('#NIM').val(''); $('#jurusan').val('');
                }
            });
        }
    </script>
</body>
</html>