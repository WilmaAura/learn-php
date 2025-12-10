<?php
include '../exercise1/config.php';

$sql = "SELECT * FROM dosen";
$data = mysqli_query($conn, $sql);

$result = array();
while($row = mysqli_fetch_assoc($data)){
    $result[] = $row;
}

echo json_encode($result);
?>
