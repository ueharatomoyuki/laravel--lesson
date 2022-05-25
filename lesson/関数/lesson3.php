<?php
    function fibonacci($num){
        if($num == 0){
            return 0 ;
        }elseif($num == 1){
            return 1 ;
        }
        else{
            return fibonacci($num-1) + fibonacci($num-2) ;
        }
    }

    echo fibonacci(22);
?>