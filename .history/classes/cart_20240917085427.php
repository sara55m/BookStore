<?php

class Cart{
    //public $total_price=0;
    public function add_book($book)
    {
        
            //$_SESSION['name']=$_POST["name"];
            //$_SESSION['email']=$_POST["email"];
            //echo "Name:". $_SESSION['name'];
            //echo "<br/>";
            //echo "Email:". $_SESSION['email'];
            //echo "<div class='cart'>";
            //echo "<ol>";
            //$total_price=0;
            if(isset($_SESSION['cart'])){
                if(in_array($book,$_SESSION['cart'])){
                    echo "This book was added before";
                }else{
                    $_SESSION['cart'][]=$book;
                    echo "<pre>";
                    print_r($_SESSION);
                }                
            }else{
                $_SESSION['cart'][]=$book;
                    echo "<pre>";
                    print_r($_SESSION);
            }
        }
        public function show_cart(){
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $book){
                    echo "<div class='book'>";
                    echo "<ul>";
                    echo "<li>{$book[1]}</li>";
                    echo "<li>{$book[2]}</li>";
                    echo "<li>{$book[3]} {$_COOKIE['price']}</li>";
                    echo "</ul>";
                    echo "</div>"; 
                }

            }
          
        

        }
        
        
    }
    
    public function logout(){
        session_unset(); 
        session_destroy();
        echo "You Are Logged Out";
    }
}
?>