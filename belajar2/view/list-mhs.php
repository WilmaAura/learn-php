<?php
include '../../config.php';
$sql = "SELECT * FROM mhs ORDER BY Angkatan DESC";
$mhs = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list-mhs</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody>
        <?php if (count($mhs) === 0): ?>
            <tr>
                <td colspan="4">Data Tidak Ada</td>
            </tr>
        <?php else: ?>
            <?php foreach ($mhs as $m): ?>
                <tr>
                    <td><?= $m["NIM"] ?></td>
                    <td><?= $m["nama"] ?></td>
                    <td><?= $m["jurusan"] ?></td>
                    <td><?= $m["angkatan"] ?></td>
                    <td>
                        <a href="../controller/delete.php?id=<?= $m["NIM"] ?>">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>