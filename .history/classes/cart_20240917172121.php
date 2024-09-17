<?php

class Cart{
    public function add_book($book)
    {
        
            if(isset($_SESSION['cart'])){
                if(in_array($book,$_SESSION['cart'])){
                    echo "This book was added before";
                }else{
                    $_SESSION['cart'][]=$book;
                }                
            }else{
                $_SESSION['cart'][]=$book;
                    //echo "<pre>";
                    //print_r($_SESSION);
            }
        }
        public function show_cart(){
            if(isset($_SESSION['cart'])){
                echo "<h3>Cart Items</h3>";
                foreach($_SESSION['cart'] as $book){
                    echo "<div class='book'>";
                    echo "<ul>";
                    echo "<li>{$book['title']}</li>";
                    echo "<li>{$book['author']}</li>";
                    echo "<li>{$book['price']} {$_COOKIE['price']}</li>";
                    echo "<button type='button' name='add'><a href='BookDetails.php?id={$book['id']}'>Show Book Details</a></button>";
                    echo "</ul>";
                    echo "</div>"; 
                }
            }
        }    
        public function calculate_total_price(){
            $total_price=0;
            foreach ($_SESSION['cart'] as $book){
                $total_price+=$book['price'];
            }
            echo "<h3>Total Price : {$total_price}</h3>";

        }
    public function remove_books(){
        if(isset($_SESSION['cart'])){
            $_SESSION['cart']=[];
            echo "Your Cart is Empty";
        }
    } 
    
}
?>