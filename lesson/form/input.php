<form action="input.php" method="GET">
    <input type="text" name="text1" size="10">
    <input type="text" name="text2" size="10">
    <br>
    <p><button type="submit" name="button">送信</button></p>
</form>

<?php
$t1 = $_GET["text1"] ;
$t2 = $_GET["text2"] ;
?>

<?= $t1.$t2 ?>