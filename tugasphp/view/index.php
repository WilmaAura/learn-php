<?php
include '../config.php';
/* Wilma Auraruna Khalif */
// Query untuk mengambil semua data dari tabel mahasiswa
$sql = "SELECT NIM, nama, jurusan, angkatan FROM mhs ORDER BY Angkatan DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - Listing Data</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <h2 style="text-align: center;">Daftar Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data dari setiap baris
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["NIM"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["jurusan"] . "</td>";
                    echo "`<td>" . $row["angkatan"] . "</td>";
                    echo "<td class='actions'>";
                    
                    echo "<a href='edit.php?nim=" . $row["NIM"] . "' class='edit'>Edit</a>";
                    
                    echo "<a href='../controller/delete.php?nim=" . $row["NIM"] . 
                    "'class='delete' onclick='return confirm(\"Anda yakin ingin menghapus data NIM: " . $row["NIM"] . "?\");'>
                            Delete
                          </a>";                    
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data mahasiswa.</td></tr>";
            }
            ?>
        </tbody>
    </table>

        <a href="./input.php">Input data mahasiswa</a>
    <?php
    $conn->close();
    ?>

</body>
</html>