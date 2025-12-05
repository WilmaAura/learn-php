<?php

$host = "localhost"; 
$db   = "latihan_3";
$user = "latihan";
$pass = "280605";

// menyambungkan ke database
$mysqli = new mysqli($host, $user, $pass, $db);

// tampilan pesan error
if ($mysqli->connect_errno){
    die("Koneksi gagal: " . $mysqli->connect_error);
}

$sql = "DESC MyGuests";
$result = $mysqli->query($sql);

if ($result->num_rows > 0){
    // output data of each row
    while ($row = $result->fetch_assoc()){
        echo "id: ". $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"].
        "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($mysqli);
?>
