<?php
$nums = [10, 45, 22, 77, 34, 21, 200, 286, 22, 5];

$array = array_filter($nums,function($num){
    return $num % 2 === 0 ;
});

print_r($array);
?>