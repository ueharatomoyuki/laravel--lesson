<?php
function fizz($num):String
{
    if($num % 3 == 0 && $num % 5 == 0){
        return "FizzBuzz";
    }elseif($num % 3 == 0){
        return "Fizz";
    }elseif($num % 5 ==0){
        return "Buzz";
    }else {
        return $num ;
    }
}

echo fizz(15);
?>