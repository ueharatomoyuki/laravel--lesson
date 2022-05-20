<form action="lesson.php" method="GET">
    <p>num1 <input type="text" name="num1" size="10">
</p>
    num2 <input type="text" name="num2" size="10">
    <br>
    <P><button type="submit" name="button">比較</button></p>
</form>

<?php
$n1 = $_GET["num1"]??"" ;
$n2 = $_GET["num2"]??"" ;
$msg ;

if($n1>$n2){
    $msg = "num1はnum2より大きい" ;
}elseif($n2>$n1){
    $msg = "num2はnum1より大きい";
}else{
    $msg = "num1とnum2は等しい" ;
}

?>

<?= $msg?>