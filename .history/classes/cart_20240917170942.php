<?php

class Cart{
    public $price;
    //public $total_price=0;
    public function add_book($book)
    {
        
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
                    echo "<li>{$book[1]}</li>";
                    echo "<li>{$book[2]}</li>";
                    $this->price=$book[3];
                    echo "<li>{$this->price} {$_COOKIE['price']}</li>";
                    echo "<button type='button' name='add'><a href='BookDetails.php?id={$book[0]}'>Show Book Details</a></button>";
                    echo "</ul>";
                    echo "</div>"; 
                }
            }
        }    
        public function calculate_total_price(){
            $total_price=0;
            $total_price+=$this->price;
            echo $total_price;

        }
    public function remove_books(){
        if(isset($_SESSION['cart'])){
            $_SESSION['cart']=[];
            echo "Your Cart is Empty";
        }
    } 
    
}
?>