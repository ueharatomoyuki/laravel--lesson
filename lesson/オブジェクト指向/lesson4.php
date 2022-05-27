<?php
require_once("lesson3.php");
    class SmartPhone{
        private $product ;
        private $num ;
        private $mail ;
        private $adr  ;

        function __construct($product,$num,$mail)
        {
            $this->product = $product ;
            $this->num = $num ;
            $this->mail = $mail ;
        }
            function addAddress(Address $add)
            {
                session_start();
                $adr = unserialize($_SESSION['adr']);
                $this->adr[] = $add ;
                $_SESSION['adr'] = serialize($adr);
            }

           function dispAddress()
           {
            $adr = unserialize($_SESSION['adr']);
            foreach($adr as $val){
                foreach($val as $v){
                    echo $v ;
                }echo "<br>" ;
            }
           }
    }
