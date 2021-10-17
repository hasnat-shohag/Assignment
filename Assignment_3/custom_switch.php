<?php

$subject = "Ice";

function custom_switch($input){

    $input = strtolower($input);
    
    if($input == 'ice'){
        cus_print($input);
    }
    else if($input == 'cse'){
        cus_print($input);
    }
    else if($input == 'eee'){
        cus_print($input);
    }
    else if($input == 'acce'){
        cus_print($input);
    }
    else if($input == 'mse'){
        cus_print($input);
    }
    else {
        echo "you are not selected \n";
    }
}

custom_switch($subject);

function cus_print($input){
    echo "You are selected at ". strtoupper($input). "\n";
}
?>
