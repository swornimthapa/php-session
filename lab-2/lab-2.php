<?php

// Write a PHP script to calculate and display average temperature,
// five lowest and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
// 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
// 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
// List of seven highest temperatures : 76, 78, 79, 81, 85


    $array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
    76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
    73, 75, 79, 73);
    for($i=0 ;$i<count($array)-1;$i++){
        for($j=0; $j< count($array)-1-$i; $j++){
            if($array[$j]>$array[$j+1]){
                $temp = $array[$j];
                $array[$j]=$array[$j+1];
                $array[$j+1]=$temp;
            }
         
        }
    }
    echo '<br>';
    $sum1=0;
    foreach($array as $a){
        $sum1 = $sum1 + $a;
    }
    echo 'Average Temperature is : ' .$sum1/count($array);
    echo '<br>';
    echo 'List of seven lowest temperatures : ';
    for($i=0;$i<5;$i++){
        echo $array[$i].', ';
    }
    echo '<br>';
    echo 'List of seven highest temperatures : ';

    for($i=(count($array)-5);$i<count($array);$i++){
        echo "$array[$i]".', ';
    }

?>  
