<form action = "lesson7.php" method = "GET" >
    <p>ループ最大数：<input type = "number" name = "num1" size = "10"> </p>
    <p>合計最大：<input type = "number" name = "num2" size = "10"> </p>
 <P><button type="submit" name="button">計算</button></p>
</form>

<?php
$n1 = (int)$_GET["num1"]??0;
$n2 = (int)$_GET["num2"]??0;
$vlue = 0 ;
$i = 1 ;
for(;$vlue<$n2;$i++){
    $vlue = $vlue + $i ; 
    // echo $i ;
    // echo "<br>";
    // echo $vlue ;
    // echo "<br>";
}
$i -- ;

echo "ループ回数 $i 回"
?>
