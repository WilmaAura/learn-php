<?php
$sisi = 20;
$luas = $sisi * $sisi;

// Ganti \n dengan <br> untuk baris baru di browser
echo "Hitung Luas Persegi <br>";
echo "Sisi: ".$sisi."<br>";
echo "Rumus Luas = " .$sisi. " x " .$sisi. "<br>";
echo "Luas: " .$luas;

echo "<br>---------------------<br>";

// 2pl * 4diameter
$p = 5;
$l = 2;
$diameter = 20;
$luas = 2*$p*$l * 4*$diameter;

echo "Luas: $luas";
?>