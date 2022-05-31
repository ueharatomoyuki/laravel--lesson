<?php
session_start();

$pd = new PDO(
    'mysql:dbname=mysql_2;host=127.0.0.1',

    'axizuser',

    'axiz',
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$id = $_GET["loginId"];
if($id == ""){
    $_SESSION["empId"] = 1;
    header('Location:../index.php');
    exit;
}
$pass = $_GET["pass"];
if($pass == ""){
    $_SESSION["empPass"] = 1;
    header('Location:../index.php');
    exit;
}
$key = null ;
$stmt = $pd->query("select password from users where login_id = '$id' ");
$result = $stmt->fetchAll();
foreach ($result as $key=>$val){
   foreach($val as $va){
       $key = $va ;
   }
}

if($pass === $key){
    $_SESSION["id"] = $id ;
    $_SESSION["pass"] = $pass ;
    header('Location:../success.php');
}else{
    $_SESSION["miss"] = 1 ;
    header('Location:../index.php');
}