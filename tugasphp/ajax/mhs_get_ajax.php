<?php
include '../config.php';

$nim = $_GET['nim'];

$query = $conn->prepare("SELECT * FROM mhs WHERE NIM = ?");
$query->bind_param("s", $nim);
$query->execute();

$result = $query->get_result();
$data = $result->fetch_assoc();

echo json_encode($data);
