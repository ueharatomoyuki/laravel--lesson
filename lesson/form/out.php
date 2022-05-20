<form action = "out.php" method = "GET" >
    <input type="radio" name= col value="red" >赤
    <input type="radio" name= col value="yellow" >黄
    <input type="radio" name= col value="blue" >青
    <br>
    <p><button type="submit" name="button">チェック</button></p>
</form>

<?php
$co = $_GET["col"] ;
?>

<?= $co ?>