<form action = "lesson1.php" method = "GET" >
    <p>ワード：<input type = "text" name = "txt" size = "10"></p>
    <p>回数：<input type = "number" name = "num" size = "10"> </p>
    <P><button type="submit" name="button">送信</button></p>
</form>

<?php
$txt = $_GET["txt"]??"";
$num = $_GET["num"]??"0";
$msg = "" ;
for ($i = 0; $i< $num; $i++) {
    $msg = $msg . $txt ;
}
?>
<?= $msg ?>