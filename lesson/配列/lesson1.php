<?php
// 配列の定義
$nums = [4, 7, 3, 5, 9, 1, 2, 8, 6];
$sum = 0 ;
$avg = 0 ;
foreach ($nums as $value){
    $sum += $value ;
}
$avg = $sum / count($nums) ;

echo "合計：$sum";
echo "<br>";
echo "平均：$avg";
?>