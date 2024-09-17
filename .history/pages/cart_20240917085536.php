<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/cart.php");
$cart=new Cart();
$cart->show_cart();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $title=$_GET['title'];
    $author=$_GET['author'];
    $price=$_GET['price'];
    $book=[$id,$title,$author,$price];
    $cart->add_book($book);
}
if(!isset($_POST['logout'])){
    echo "<form action='#' method='post'>
        <input type='submit' name='logout' value='Logout'>
    </form>";
}else{
    $cart->logout();
}

require_once("../includes/footer.php");
?>