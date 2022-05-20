<form action="lesson2.php" method="GET">
    <input type="text" name="num1" size="10">
    <select id="cal" name="cal" method="GET">
        <option value="+">＋</option>
        <option value="-">ー</option>
        <option value="*">✕</option>
        <option value="/">÷</option>
    <input type="text" name="num2" size="10">
    <br>
    <P><button type="submit" name="button">比較</button></p>
</form>

<h2>計算結果：</h2>

<?php
$n1 = (int)$_GET["num1"] ;
$n2 = (int)$_GET["num2"] ;
$ca = $_GET["cal"];


switch($ca) {
    case "+":
        $msg = $n1+$n2 ;
        break ;
    case "-":
        $msg = $n1-$n2 ;
        break ;
     case "*":
        $msg = $n1*$n2 ;
        break ;
    case "/":
        $msg = $n1/$n2 ;
         break ;
}
?>

<?=$msg ?>