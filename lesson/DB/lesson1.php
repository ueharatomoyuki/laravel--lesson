<?php
$pdo = new PDO(
    'mysql:dbname=axizdb;host=127.0.0.1', 

    'axizuser',

    'axiz'
    ,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$stmt = $pdo->query("select * from products ");
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