<?php
    $host = "localhost";
    $user = "akademik";   
    $pass = "280605";
    $db = "akademik_15841"; 

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){

        die("Connection Failed: " . $conn->connect_error); 
    }
    
    echo "Koneksi Berhasil!";
    

?>