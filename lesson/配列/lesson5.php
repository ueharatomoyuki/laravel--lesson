<form action="lesson5.php" method="GET">
    <input type="checkbox" name="food" value= 120>ニンジン(１２０円)<br>
    <input type="checkbox" name="food" value= 198>玉ねぎ(１９８円)<br>
    <input type="checkbox" name="food" value= 198>ジャガイモ(１９８円)<br>
    <input type="checkbox" name="food" value= 266>豚肉(２６６円)<br>
    <input type="checkbox" name="food" value= 189>鶏肉(１８９円)<br>
    <input type="checkbox" name="food" value= 398>牛肉(３９８円)<br>
    <input type="checkbox" name="food" value= 158>カレールー(１５８円)<br>
<P><button type="submit" name="button">決定</button></p>
</form>

<?php
$fo[] = (int)$_GET["food"]??0;
$sum = 0;
foreach($fo as $value){
    $sum += $value ;
}
echo "合計値：$sum 円"
?>
