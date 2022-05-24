<form action="lesson2.php" method="GET">
    <p><input type="text" name="txt" size="10"></p>
    <P><button type="submit" name="button">送信</button></p>
</form>
<?php
$tx = $_GET["txt"] ??"";
$t = mb_strstr($tx, 'って', true);
$start = mb_strpos($tx,'って')+2 ;
$end = mb_strpos($tx,'回');
$n = mb_substr($tx,$start,$end-$start);
// echo $t ;
// echo $n ;
echo str_repeat($t,$n);
?>