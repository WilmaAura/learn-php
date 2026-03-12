<?php
    include "mhs.php";
    include "matkul.php";
    include "mhsTransfer.php";

    $matkul_1 = new matkul();
    $matkul_2 = new matkul();

    $daftar_nilai =[
        "1" => ["sks" => 2, "nilai" => "A"],
        "2" => ["sks" => 3, "nilai" => "B"],
        "3" => ["sks" => 2, "nilai" => "C"],
    ];

    $mhs_1 = new mhsTransfer($daftar_nilai);

    $matkul_1->setData("A11.12345", "Pemrograman Berbasis Web");
    $matkul_2->setData("A11.12346", "Pemrograman Web Lanjut");

    $mhs_1->setData("A11.2024.15841", "Wilma Auraruna Khalif", [$matkul_1, $matkul_2], "2005-06-28"); # tambahkan tgl_lahir

    #
    echo "<pre>";
    print_r($mhs_1->getData());
    echo "</pre>";
?>
