<?php
$host = "localhost";
$user = "wilma";
$pass = "280605";
$db   = "krs";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
