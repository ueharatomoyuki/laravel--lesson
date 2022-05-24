<form action="lesson1.php" method="GET">
    <p>テキスト：<input type="text" name="txt" size="10"></p>
    <P><button type="submit" name="button">送信</button></p>
</form>
<?php
$tx = $_GET["txt"]??"";
$txtl = strlen($tx) ;
$txtup = strtoupper($tx) ;
$txtlo = strtolower($tx) ;
echo "長さ: $txtl ";
echo "<br>" ;
echo "大文字変換: $txtup " ;
echo "<br>" ;
echo "小文字変換: $txtlo " ;
?>