<?php
session_start();
require_once("../includes/header.php");
class Cart{
    //public $total_price=0;
    public function __construct()
    {
        if(isset($_POST["submit"])){
            $_SESSION['name']=$_POST["name"];
            $_SESSION['email']=$_POST["email"];
            echo "Name:". $_SESSION['name'];
            echo "<br/>";
            echo "Email:". $_SESSION['email'];
            echo "<div class='cart'>";
            echo "<ol>";
            $total_price=0;
        foreach($_SESSION['cart'] as $book){
            echo "<div class='book'>";
            echo "<ul>";
            echo "<li>{$book['Title']}</li>";
            echo "<li>{$book['Author']}</li>";
            echo "<li>{$book['Price']} {$_COOKIE['price']}</li>";
            echo "</ul>";
            echo "</div>";
            $total_price+=$book['Price'];
            echo "<br/>"; 
        }
        echo "</ol>";
        echo "</div>";
        echo $total_price ." ".$_COOKIE['price'];
        
    }
    }
    public function logout(){
        echo "<form action='logout.php' method='post'>
            <input type='submit' name='logout' value='Logout'>
        </form>";
    }
}
$cart=new Cart();
$cart->logout();
require_once("../includes/footer.php");
?>