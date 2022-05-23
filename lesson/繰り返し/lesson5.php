<?php
for($i=1;$i<=5;$i++){
   for($j=1;$j<=10;$j++){
       if($j<=$i || $j>10-$i){
            echo "*";
       }else{
           echo " &thinsp; " ;
       }
   }   
   echo "<br>" ;
}
?>