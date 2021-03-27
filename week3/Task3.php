<?php
    echo"total1:".$total = sum(2,3); 
    echo'<br>';
    echo"total2:".$total = sum(2,4,3);
    echo'<br>';
    echo"total3:".$total = sum(2,4,3,5);
    echo'<br>';
    function sum(...$nums){
        $total = 0;
        foreach($nums as $num){
            $total += $num;
        }
        return $total;
    }
?>