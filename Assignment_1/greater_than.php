<?php

$a = 40;
$b = 40;
$c = 40;

if($a == $b || $a == $c || $b == $c){
    echo("Enter unique value");
}

else{
    if($a > $b && $a > $c){
        echo "$a is greater than $b and $c";
    }
    else if($b > $c){
        echo "$b is greater than $a and $c";
    }
    else{
        echo "$c is greater than $a and $b";
    }
}

?>