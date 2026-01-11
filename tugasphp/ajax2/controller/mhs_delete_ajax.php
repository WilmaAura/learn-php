<?php
include '../../config.php';
$nim = $_POST['NIM'];
mysqli_query($conn, "DELETE FROM mhs WHERE NIM = '$nim'");
?>