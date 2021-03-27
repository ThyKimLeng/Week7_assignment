<?php
    $arr = [2,3,4,6,7,9,11,20];
    $even_number = array_filter($arr, fn($num) => $num%2 == 0);
    print_r($even_number);
?>



