<?php

$mark = 59;

switch ($mark){
    case $mark > 100 || $mark < 0:
        echo "Give a valid marks";
        break;
    case $mark >= 80:
        echo "A+";
        break;
    case $mark >= 75:
        echo "A";
        break;
    case $mark >= 70:
        echo "A-";
        break;
    case $mark >= 65:
        echo "B+";
        break;
    case $mark >= 60:
        echo "B";
        break;
    case $mark >= 55:
        echo "B-";
        break;
    case $mark >= 50:
        echo "C+";
        break;
    case $mark >= 45:
        echo "C";
        break;
    case $mark >= 40:
        echo "D";
        break;
    default:
        echo "You are Failed";
}

?>