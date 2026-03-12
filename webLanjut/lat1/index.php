<?php
    include "mhs.php";
    include "matkul.php";
   
    $mhs_1 = new mhs();
    $matkul_1 = new matkul();
    $matkul_2 = new matkul();

    $matkul_1->setData("A11.12345", "Pemrograman Berbasis Web");
    $matkul_2->setData("A11.12346", "Pemrograman Web Lanjut");

    $mhs_1->setData("A11.2024.15841", "Wilma Auraruna Khalif", [$matkul_1, $matkul_2]);
    
    echo "<pre>";
    print_r($mhs_1);
    echo "</pre>";mhs_1
?>
