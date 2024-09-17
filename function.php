<?php
function currency(){
    if($_COOKIE["price"]=="EG"){
        $x=1;
    }elseif($_COOKIE["price"]=="USD"){
        $x=1/48.40;
    }
    else{
        $x=1/53.84;
    }  
    return $x;

}  
?>