<?php

function Cgpa_calculation($mark){
    if($mark >= 80){
        // echo "A+";
        return 4.00;
    }
    else if($mark >= 75 ){
        // echo "A";
        return 3.75;
    }
    else if($mark >= 70 ){
        // echo "A-";
        return 3.50;
    }
    else if($mark >= 65 ){
        // echo "B+";
        return 3.25;
    }
    else if($mark >= 60 ){
        // echo "B";
        return 3.00;
    }
    else if($mark >= 55 ){
        // echo "B-";
        return 2.75;
    }
    else if($mark >= 50 ){
        // echo "C+";
        return 2.50;
    }
    else if($mark >= 45 ){
        // echo "C";
        return 2.25;
    }
    else if($mark >= 40 ){
        // echo "D";
        return 2.00;
    }
    else{
        // echo "F";
        return 0;
    }
}

$Math = Cgpa_calculation(70);
$English = Cgpa_calculation(80);
$CSE = Cgpa_calculation(74);
$ICE = Cgpa_calculation(66);
$EEE = Cgpa_calculation(54);
$Stat = Cgpa_calculation(90);

$result = round(($Math + $English + $CSE + $ICE + $EEE + $Stat)/6, 2);

echo "Your CGPA is : $result </br>";

?>
