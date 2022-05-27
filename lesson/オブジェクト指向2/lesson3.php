<?php
require_once("lesson1.php");
class CheatDice extends Dice
{
    function cast(){
        if(!isset($_SESSION)){
            session_start();
        }
     if(!isset($_SESSION['num'])){
         $_SESSION['num'] =1;
     }else{
         $_SESSION['num'] += 1;
     }
     if($_SESSION['num']%6==0){
         return 6 ;
     }else{
     return rand(1,6) ;
     }   
    }
}
