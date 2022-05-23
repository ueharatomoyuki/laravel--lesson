<?php
// 配列の定義
$nums = [4, 7, 3, 5, 9, 1, 2, 8, 6];
$emp = 0;
for($i=0;$i<4;$i++){
    $emp = $nums[$i];
    $nums = $nums[8-$i];
    $nums[8-$i] = $emp ;
}
print_r($nums);
?>