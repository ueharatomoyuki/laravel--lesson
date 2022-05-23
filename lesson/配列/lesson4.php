<?php
// 配列の定義
$nums = [4, 7, 3, 5, 9, 1, 2, 8, 6];
$s = array_reverse($nums);
for($i=0;$i<9;$i++){
    for($j=1;$j<9;$j++){
        if($nums[$j-1]> $nums[$j]){
        $emp = $nums[$j];
        $nums[$j] = $nums[$j-1];
        $nums[$j-1] = $emp ;
        }
    }
}

print_r($nums);
?>