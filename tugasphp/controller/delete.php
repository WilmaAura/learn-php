<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../config.php'; 

if (isset($_GET['nim'])) {
    
    $deleteNim = $_GET['nim'];
    
    $deleteNim = $conn->real_escape_string($deleteNim);
    
    $sql = "DELETE FROM mhs WHERE NIM = '$deleteNim'";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        
        header("Location: ../view/index.php?status_delete=success");
        exit(); 
    } else {
        echo "Error saat menghapus data: " . $conn->error;
    }
}
if (isset($conn)) {
    $conn->close();
}
?>