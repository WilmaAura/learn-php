<?php
    include "mhs.php";
    include "matkul.php";
   
    $mhs_1 = new mhs();
    $matkul_1 = new matkul();
    $matkul_2 = new matkul();

    $matkul_1->setData("A11.12345", "Pemrograman Berbasis Web");
    $matkul_2->setData("A11.12346", "Pemrograman Web Lanjut");

    $mhs_1->setData("A11.2024.15841", "Wilma Auraruna Khalif", [$matkul_1, $matkul_2], "2005-06-28"); # tambahkan tgl_lahir

    #
    echo "<pre>";
    echo "Umur dihitung dengan method/function : <br>";
    print_r($mhs_1->getData()[4]);
    echo "<br><br>";
    echo "Nilai umur deberi secara langsung: <br>";
    $mhs_1->umur = 20;
    print_r($mhs_1->umur);
    echo "</pre>";
?>
