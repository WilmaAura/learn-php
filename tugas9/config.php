<?php
$host = "localhost"; 
$user = "wilma";      
$pass = "280605";          
$db   = "univ";


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>