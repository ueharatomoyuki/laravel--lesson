<?php
class Dice
{
    private $num = 0;

    function cast()
    {
        $this->num = rand(1,6) ;
        return $this->num;
    }

    function see(){
        if($this->num == 0){
            return 1 ;
        }else{
            return $this->num ;
        }
    }
}

// $d = new Dice() ;
// echo $d->cast() ;
// echo $d->see() ;
?>