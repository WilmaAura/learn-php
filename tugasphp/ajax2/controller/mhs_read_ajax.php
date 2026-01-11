<?php
include '../../config.php';
$query = mysqli_query($conn, "SELECT * FROM mhs");

while($row = mysqli_fetch_array($query)) {
    echo "<tr>
            <td>".$row['NIM']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['jurusan']."</td>
            <td>".$row['angkatan']."</td>
            <td>
                <button onclick='editData(".$row['NIM'].")'>Edit</button>
                <button onclick='hapusData(".$row['NIM'].")'>Hapus</button>
            </td>
          </tr>";
}
?>