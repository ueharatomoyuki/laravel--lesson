<?php
session_start();
$id = $_GET["productId"]??"";
if($_GET["productId"] == ""){
    $_SESSION["proId"] = "商品IDは必須です。";
    header('Location:../insert.php');
    exit;
}
$name = $_GET["name"]??"";
if(empty($_GET["name"])){
    $_SESSION["name"] = "商品名は必須です。";
    header('Location:../insert.php');
    exit;
}
$price = $_GET["price"]??"";
if(empty($_GET["price"])){
    $_SESSION["price"] = "単価は必須です。";
    header('Location:../insert.php');
    exit;
}

?>