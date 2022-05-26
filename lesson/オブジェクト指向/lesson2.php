<form action = "lesson2.php" method="GET">
    <p>名前：<input type="text" name="name"></p>
    <p>PHPスコア：<input type="text" name="psc"></p>
    <p>DBスコア：<input type="text" name="dsc"></p>
    <P><button type="submit" name="button">送信</button></p>
</form>

<?php
session_start() ;
$name = $_GET["name"]??"";
$pScore = $_GET["psc"]??0;
$dScore = $_GET["dsc"] ??0;
require_once("lesson1.php");
$st = unserialize($_SESSION['student']);
$student = new Student($name,$pScore, $dScore);
$st[] = (array)$student ;
$_SESSION['student'] = serialize($st);

echo "<table border='1'>";
echo "<tr> <td>名前</td> <td>PHPスコア</td> <td>DBスコア</td> <td>合計</td></tr>";
foreach($st as $val){
   echo "<tr> <td>".$student->getName()."</td>";
   echo "<td>".$student->getpScore()."</td>" ;
   echo "<td>".$student->getdScore()."</td>" ;
   echo "<td>".$student->dispSumScore()."</td></tr>" ;
}
?>