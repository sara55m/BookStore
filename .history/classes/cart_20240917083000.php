<?php

class Cart{
    //public $total_price=0;
    public function add_book($book)
    {
        if(isset($_POST["submit"])){
            $_SESSION['name']=$_POST["name"];
            $_SESSION['email']=$_POST["email"];
            //echo "Name:". $_SESSION['name'];
            //echo "<br/>";
            //echo "Email:". $_SESSION['email'];
            $book=[$_POST['id'],$_POST['title'],$_POST['author'],$_POST['price']];
            //echo "<div class='cart'>";
            //echo "<ol>";
            //$total_price=0;
            $_SESSION['cart'][]=$book;
            echo "<pre>";
            print_r($_SESSION);
        /*foreach($_SESSION['cart'] as $book){
            echo "<div class='book'>";
            echo "<ul>";
            echo "<li>{$book['Title']}</li>";
            echo "<li>{$book['Author']}</li>";
            echo "<li>{$book['Price']} {$_COOKIE['price']}</li>";
            echo "</ul>";
            echo "</div>";
            $total_price+=$book['Price'];
            echo "<br/>"; 
        }*/
        //echo "</ol>";
        //echo "</div>";
        //echo $total_price ." ".$_COOKIE['price'];
        
    }
    }
    public function logout(){
        session_unset(); 
        session_destroy();
        echo "You Are Logged Out";
    }
}
?>