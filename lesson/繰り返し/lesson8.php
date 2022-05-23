<form action = "lesson8.php" method = "GET" >
    <p>num：<input type = "number" name = "num1" size = "10"> </p>
    <P><button type="submit" name="button">素数判定</button></p>
</form>
<?php
$num = $_GET["num1"]??0;
$msg = "素数です";
if($num == 0 || $num == 1){
    $msg = "素数ではない";
}
for($i=2;$i<$num;$i++){
    if($num%$i == 0 ){
        $msg = "素数ではない" ;
        break ;
    }
}
echo $msg ;
?>