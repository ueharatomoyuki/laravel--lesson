
<?php
$score = [
    "english" => ["satou" => 70, "suzuki" => 75, "takahashi" => 65], 
    "math" => ["satou" => 80, "suzuki" => 85, "takahashi" => 79], 
    "japanese" => ["satou" => 74, "suzuki" => 78, "takahashi" => 80] 
   ];   

   foreach($score as $key => $value){
       echo $key;
       echo "<br>" ;
       print_r($value);
       echo "<br>" ;
   }
?>