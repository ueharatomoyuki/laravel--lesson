<form action="lesson3.php" method="GET">
    <p>郵便番号：<input type="text" name="num" size="10"></p>
    <P><button type="submit" name="button">チェック</button></p>
</form>

<?php
$num = 0;
$num = $_GET["num"];
if(preg_match('/^\d{3}-\d{4}$/', $num)) {
    echo "郵便番号の形式です";
}else{
    echo "郵便番号の形式ではありません。";
}
?>