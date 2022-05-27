<form action="lesson2.php" method="GET">
    <p><input type="text" name="tex" >回</p>
    <P><button type="submit" name="button">サイコロをふる</button></p>
</form>
<?php
require_once("lesson3.php");
$n = $_GET["tex"]??0;
$dice = new CheatDice();
for($i=1;$i<=$n;$i++){
    echo "{$i}回目：";
    echo  $dice->cast();
    echo "<br>" ;
}
 unset($_SESSION['num']);
?>