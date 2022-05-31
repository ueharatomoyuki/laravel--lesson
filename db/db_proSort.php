<?php
session_start();
$num = $_GET["va"]??0;
$result = $_SESSION["result"];
switch ($num) {
    case 1:
        $re = array_column($result, "product_id");
        array_multisort($re, SORT_ASC, $result);
        $_SESSION["result"] = $result;
        break ;

    case 2:
        $re = array_column($result,"name");
        array_multisort($re,SORT_ASC,$result);
        $_SESSION["result"] = $result;
        break ;

    case 3;
        $re = array_column($result,"price");
        array_multisort($re,SORT_ASC,$result);
        $_SESSION["result"] = $result;
        break ;

    case 4;
        $re = array_column($result,"price");
        array_multisort($re,SORT_DESC,$result);
        $_SESSION["result"] = $result;
        break ;


}
header('Location:../menu.php');
