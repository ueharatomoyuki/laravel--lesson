<?php
//クラス定義
class Student
{
    private $name ;
    private $pScore ;
    private $dScore ;

    function __construct($name, $pScore, $dScore){
        $this->name = $name ;
        $this->pScore = $pScore ;
        $this->dScore = $dScore ;
    }

    function dispSumScore(){
        return $this->pScore + $this->dScore ;
    }

    function getName(){
        return $this->name ;
    }

    function setName($name){
        $this->name = $name ;
    }

    function getpScore(){
        return $this->pScore ;
    }

    function setpScore($pScore){
        $this->pScore = $pScore ;
    }

    function getdScore(){
        return $this->dScore ;
    }

    function setdScore($dScore){
        $this->name = $dScore ;
    }
}