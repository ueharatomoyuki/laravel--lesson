<form action="lesson2.php" method="GET">
    <p>名前：<input type="text" name="name"></p>
    <p>PHPスコア：<input type="text" name="psc"></p>
    <p>DBスコア：<input type="text" name="dsc"></p>
    <P><button type="submit" name="button">送信</button></p>
</form>

<?php
session_start();
$name = $_GET["name"] ?? "";
$pScore = $_GET["psc"] ?? "";
$dScore = $_GET["dsc"] ?? "";
if (!$name == "" || $pScore == "" || $dScore == "") {
    require_once("lesson1.php");
    $st = unserialize($_SESSION['student']);
    $ss = unserialize($_SESSION['sum']);
    $student = new Student($name, $pScore, $dScore);
    $st[] = (array)$student;
    $ss[] = $student->dispSumScore();
    $_SESSION['student'] = serialize($st);
    $_SESSION['sum'] = serialize($ss);

    echo "<table border='1'>";
    echo "<tr> <td>名前</td> <td>PHPスコア</td> <td>DBスコア</td> <td>合計</td></tr>";
    foreach ($st as $key => $val) {
        echo "<tr>" ;
        foreach ($val as $va) {
            echo "<td>" . $va . "</td>";
        }
        echo "<td>".$ss[$key]."</td>" ;
    }
}
// unset($_SESSION['student']);
// unset($_SESSION['sum']);
?>