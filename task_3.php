<?php 

$grades= [85, 92, 78, 88, 95];

function num($grades){
    arsort($grades);
    print_r($grades);
}
num($grades);
?>