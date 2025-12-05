<?php
    $x = -2;

    if ($x < 0){
        echo "Kurang dari 0\n";
    }else if ($x == 0) {
        echo "Sama dengan 0\n";
    }else if ($x > 0){
        echo "Lebih dari 0\n";
    }

    //Buatlah angka di variable jam termasuk pagi, siang, malem, atau subuh
    $jam = 7;

    if ($jam >= 0){
        echo"Itu pagi bos dari jam 00.00-12.00\n";
    }else if ($jam >= 4){
        echo "Subuh bro subuh, biasanya jam 04.00-05.00\n";
    }
     else if ($jam >= 13){
        echo "Itu siang bro dari jam 13.00-17.00\n";
    }else if ($jam >= 18){
        echo "Malem bang saatnya tidur dari jam 18.00 - 23.59\n";
    }


?>