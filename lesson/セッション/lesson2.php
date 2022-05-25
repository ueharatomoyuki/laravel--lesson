<?php
$num = $_GET["num"]??0;
session_start();
$n []= $num ;
 if(isset($_SESSION['n']))
 $_SESSION['n'] = $n ;

    echo "[ " ;
foreach($n as $value){
    echo $value ;
    echo "," ;
}   echo " ]" ;
?>

<form action="lesson2.php">
    <input type="number" name="num">
   <P> <button type="submit">追加</button></P>
</form>
<form action="lesson2.php">
    <button type="submit">取り出し</button>
</form>