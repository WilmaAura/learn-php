<?php
    // file ini untuk dapatkan data dari db
    require '../config.php'

    //query ke db
    // $hasil = $mysqli->query("SELECT * FROM mhs");
    //mhs = [];
    //jika ada data
    if(result && $result->num_rows >0){
        while($row = $hasil->fetch_assoc()){
            $mhs[] = $row; //tampungan dari query pake looping
        }
    }
    return $mhs;
?>