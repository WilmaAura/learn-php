<?php
    include 'config.php';
    $sql = "SELECT * FROM mhs";
    $result = $conn->query($sql);

    if ($result-num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["nim"] . "</td>"; 
            echo "<td>" . $row["Nama"] . "</td>"; 
            echo "<td>" . $row["Alamat"] . "</td>"; 
            echo "<td>" . $row["Jenis Kelamin"] . "</td>"; 
            echo "<td>" . $row["Jenis Kelamin"] . "</td>"; 
            echo "<td>" . $row["Jenis Kelamin"] . "</td>"; 

            echo "</tr>";
        }
    }
?>