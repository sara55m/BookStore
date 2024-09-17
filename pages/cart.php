<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/cart.php");
if(isset($_POST['remove'])){
    $cart=new Cart();
    $cart->remove_books();
}else{
    
if(isset($_SESSION['name'],$_SESSION['email'])){
    echo "Name : ".$_SESSION['name'];
    echo "</br/>";
    echo "Email : ".$_SESSION['email'];

}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $title=$_GET['title'];
    $author=$_GET['author'];
    $price=$_GET['price'];
    $book=["id"=>$id,"title"=>$title,"author"=>$author,"price"=>$price];
    $cart=new Cart();
    $cart->add_book($book);
}


$cart->show_cart();
echo "<br/>";
$cart->calculate_total_price();
echo "<form action='#' method='post'>
        <input type='submit' name='remove' value='Empty Cart'>
    </form>";

}


require_once("../includes/footer.php");
?>