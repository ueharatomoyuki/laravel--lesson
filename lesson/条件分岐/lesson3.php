<form action = "lesson3.php" method = "GET" >
    <input type="radio" name= "col" value="red" >赤
    <input type="radio" name= "col" value="yellow" >黄
    <input type="radio" name= "col" value="blue" >青
    <br>
    <p><button type="submit" name="button">チェック</button></p>
</form>
<?php
$co = $_GET["col"]??"";

switch($co){
    case "red":
        $msg ="赤ですね。進んではいけません。";
        break;
    case "yellow":
        $msg = "黄ですね。止まってください。";
        break ;
    case "blue" ;
        $msg = "青ですね。進んでください";
        break;
    default :
        $msg = "赤、青、黄のいずれかを選択してください。";

    
}
?>
<h2>結果：<?= $msg?></h2>