<form action="lesson3.php" method="GET">
    <p>検索値：<input type="text" name="num1" size="10"></p>
    <P><button type="submit" name="button">検索</button></p>
</form>

<?php
// 配列の定義
$nums = [4, 7, 3, 5, 9, 1, 2, 8, 6];
$nm = $_GET["num1"]??0;
$result = array_search($nm,$nums);
print_r($result) ;
?>
