<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/cart.php");

$cart=new Cart();
$cart->add_book();
echo "<form action='#' method='post'>
<input type=' submit' name='logout' value='Logout'>
</form>";
if($_POST['logout']){
    $cart->logout();
}

require_once("../includes/footer.php");
?>