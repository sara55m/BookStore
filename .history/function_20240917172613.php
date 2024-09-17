<?php
function currency(){
    if($_COOKIE["price"]=="EG"){
        $price=1;
    }elseif($_COOKIE["price"]=="USD"){
        $price=48.40;
    }
    else{
        $price=53.84;
    }  
    return $price;

}  
?>