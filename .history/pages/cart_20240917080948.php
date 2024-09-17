<?php
session_start();
require_once("../includes/header.php");

$cart=new Cart();
$cart->add_book();
//$cart->logout();
require_once("../includes/footer.php");
?>