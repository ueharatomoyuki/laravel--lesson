<?php
function leap($yaer)
{
    if($yaer % 100 ==0 && $yaer % 400 == 0){
        return true ;
    }elseif($yaer % 4 == 0){
        return true ;
    }else{
        return false ;
    }
}
if(leap(20013)){
    echo "閏年";
}else{
    echo "平年";
}
?>