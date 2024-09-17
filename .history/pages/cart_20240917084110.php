<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/cart.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $title=$_GET['title'];
    $author=$_GET['author'];
    $price=$_GET['price'];
    $book=[$id,$title,$author,$price];
    $cart=new Cart();
    $cart->add_book($book);
}

/*echo "<form action='#' method='post'>
<input type='submit' name='logout' value='Logout'>
</form>";
if($_POST['logout']){
    $cart->logout();
}*/

require_once("../includes/footer.php");
?>