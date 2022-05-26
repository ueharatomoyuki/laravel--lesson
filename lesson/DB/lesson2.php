<form action = "lesson2.php" method="GET" >
    <p><input type="text" name="txt" size="10"></p>
    <P><button type="submit" name="button">検索</button></p>
</form>

<?php
$t = $_GET["txt"]??"";
$pdo = new PDO(
    'mysql:dbname=axizdb;host=127.0.0.1', 

    'axizuser',

    'axiz'
    ,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$stmt = $pdo->query("select * from products where product_name like '%$t%' ");
$result = $stmt->fetchAll();
echo "<table border='1'>";
echo "<tr> <td><b>id</b></td> <td><b>商品名</b></td> <td><b>値段</b></td> <td><b>カテゴリ</b></td></tr>" ;
foreach ($result as $key=>$val){
    // echo "<tr><td>".$key."</td>";
   foreach($val as $va){
       echo"<td>". $va."</td>" ;
   }
   echo "</tr>";
}

?>