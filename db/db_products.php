<?php
session_start();
$t = $_GET["text"]??"";
$pro = new PDO(
    'mysql:dbname=mysql_2;host=127.0.0.1',

    'axizuser',

    'axiz',
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    );
if($t == ""){
$stmt = $pro->query("select p.product_id, p.name product_name, price, c.name from products p inner join categories c on p.category_id = c.id ");
$result = $stmt->fetchAll();
$_SESSION["result"]=$result ;
header('Location:../menu.php');
}else{
$stmt = $pro->query("select p.product_id, p.name product_name, price, c.name from products p inner join categories c on p.category_id = c.id where p.name like '%$t%' || c.name like '%$t%' ");
$result = $stmt->fetchAll();
$_SESSION["result"]=$result ;
if(empty($_SESSION["result"])){
    $_SESSION["result"] = 1 ;
   }
header('Location:../menu.php');

}
// foreach($result as $key=>$val){
//     foreach($val as $va){
//         echo $va."-";
//     }echo "<br>";
// }
