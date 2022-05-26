<?php
$pdo = new PDO(
  // DSN
  'mysql:dbname=axizdb;host=127.0.0.1', 
  // UserName
  'axizuser',
  // PASS
  'axiz'
  ,[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]
);
$stmt = $pdo->query("select * from users ");
$result = $stmt->fetchAll();
var_dump($result);
