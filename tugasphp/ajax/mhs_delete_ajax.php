
<?php

include '../config.php'; 

    
    $del= $_GET['NIM'];
    $sql = "DELETE FROM mhs WHERE NIM = '$del'";

if (isset($conn)) {
    $conn->close();
}
echo json_encode([
    "status" => 'Success'
]);
?>