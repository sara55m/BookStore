<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/cart.php");

$cart=new Cart();
$cart->add_book();
echo "<form action='#' method='post'>
<button type='button' name='logout'>Logout</button>
</form>";
if($_POST['logout']){
    $cart->logout();
}

require_once("../includes/footer.php");
?>