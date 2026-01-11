<?php
include '../config.php';
$nim = $_POST['NIM'];
mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM = '$nim'");
?>