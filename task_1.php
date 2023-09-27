<?php 

$text= "The quick brown fox jumps over the lazy dog.";

function string($text) {
    $modify= strtolower($text);
    $replace= str_replace("brown","red", $modify);
    echo $replace;
}
string($text);


?>