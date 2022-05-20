<form action="lesson1.php" method="GET">
    <p><input type="text" name="num1" size="10"></p>
    <P><button type="submit" name="button">数値判定</button></p>
</form>
<h2>判定結果：</h2>
<?php
$num = $_GET["num1"]??0 ;
if($num % 2 == 0){
    $msg = "偶数です" ;
}else {
    $msg = "奇数です" ;
}

?>
<?= $msg ?>