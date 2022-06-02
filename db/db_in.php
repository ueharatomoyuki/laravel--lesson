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
$id = $_GET["productId"];
$name = $_GET["name"];
$price = $_GET["price"];
$category = $_GET["categoryId"];
$msg = $_GET["description"]??"";
$day = date('Y-m-d H:i:s');
$ins = new PDO(
    'mysql:dbname=mysql_2;host=127.0.0.1',

    'axizuser',

    'axiz',
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    );
$stmt = $ins->query("select * from products where product_id = '$id'");
$result = $stmt->fetchAll();
if($result != null){
    $_SESSION["msg"] = "商品IDが重複しています";
    header("Location:../insert.php");
    exit;
}
$stmt = $ins->query("INSERT INTO products (product_id,category_id,name,price,description,create_at)VALUES ('$id','$category','$name','$price','$msg','$day')");
$_SESSION["msg"] = "登録が完了しました。";
header("Location:../insert.php");
// echo $id ."<br>";
// echo $name ."<br>";
// echo $price ."<br>";
// echo $category ."<br>";

?>