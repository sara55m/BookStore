<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/cart.php");

$cart=new Cart();
$cart->add_book();
//$cart->logout();
require_once("../includes/footer.php");
?>