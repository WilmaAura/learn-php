<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../config.php'; 

if (isset($_GET['NIM'])) {
    
    $nim_to_delete = $_GET['NIM'];
    
    $nim_to_delete = $conn->real_escape_string($nim_to_delete);
    
    $sql = "DELETE FROM mhs WHERE NIM = '$nim_to_delete'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        
        header("Location: index.php?status_delete=success");
        exit(); 
    } else {
        echo "Error saat menghapus data: " . $conn->error;
    }
}
if (isset($conn)) {
    $conn->close();
}
?>