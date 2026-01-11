<?php
include '../../config.php';
$nim = $_GET['NIM'];
$query = mysqli_query($conn, "SELECT * FROM mhs WHERE id = '$nim'");
$data = mysqli_fetch_assoc($query);
echo json_encode($data);
?>