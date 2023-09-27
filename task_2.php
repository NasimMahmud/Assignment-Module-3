<?php 
$numbers= range(1, 10);
function num($numbers){
    $oddNum = array();
    foreach ($numbers as $number) {
        if($number %2 != 0){
            $oddNum[] = $number;
}
}
    print_r ($oddNum);
}
num($numbers);

?>