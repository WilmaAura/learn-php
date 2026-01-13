<?php
include '../config/config.php';

// Cek apakah ada ID yang dikirim melalui method GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM berita WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>