<?php
class Address
{
    private $name ;
    private $yomi ;
    private $num ;
    private $mail ;
    
    function setName($name){
        return $this->name = $name ;
    }

    function getName(){
        return $this->name ;
    } 

    function setYomi($yomi){
        return $this->yomi = $yomi ;
    }

    function getYomi(){
        return $this->yomi ;
    } 

    function setNum($num){
        return $this->num = $num ;
    }

    function getNum(){
        return $this->num ;
    } 

    function setMail($mail){
        return $this->mail = $mail ;
    }

    function getMail(){
        return $this->mail ;
    } 

    function dispAddress(){
        echo "<table>" ;
        echo "<tr><td>getName()</td>" ;
        echo "<td>getYomi</td>" ;
        echo "<td>getNum</td>";
        echo "<td>getMail</td>";
    }
}
?>