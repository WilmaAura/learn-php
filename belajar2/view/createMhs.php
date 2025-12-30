 ```<?php
    include '../config.php';
    $sql = "SELECT * FROM mhs";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE mhs</title>
</head>
<body>
    <form method="post" action="../controller/storeMhs.php"></form>
    <table>
    <thead
    ></thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
    </table>
</body>
</html>