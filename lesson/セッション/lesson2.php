<?php
$num = $_GET["num"] ?? null;
session_start();
if ($num !== null) {
    if (isset($_SESSION['n'])) {
        $n = $_SESSION['n'];
    }
    $n[] = $num;
    $_SESSION['n'] = $n;

    echo "[ ";
    foreach ($n as $value) {
        echo $value;
        echo ",";
    }
    echo " ]";
}
elseif ($_GET["list"] == "list") {
    $n = $_SESSION['n'];
    echo end($n);
}
?>

<form action="lesson2.php">
    <input type="number" name="num">
    <P> <button type="submit">追加</button></P>
</form>
<form action="lesson2.php">
    <input type="hidden" name="list" id="list" value="list" />
    <button type="submit">取り出し</button>
</form>