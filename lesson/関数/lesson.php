<form action="lesson.php" method="GET">
    <p><input type="text" name="num" size="10"></p>
    <P><button type="submit" name="button">送信</button></p>
</form>

<?php
$tx = $_GET["num"] ;
function textGet ($tx)
{
    return $tx ;
}
echo textGet($tx);
?>