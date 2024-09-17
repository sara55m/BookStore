<?php
function currency(){
    if($_COOKIE["price"]=="EG"){
        $price=1;
    }elseif($_COOKIE["price"]=="USD"){
        $price=10;
    }
    else{
        $price=25;
    }  
    return $price;

}  
?>