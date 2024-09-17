<?php
function currency(){
    if($_COOKIE["price"]=="EG"){
        $price=1;
    }elseif($_COOKIE["price"]=="USD"){
        $price=1/48.40;
    }
    else{
        $price=1/53.84;
    }  
    return $price;

}  
?>