<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/book.php");
if(isset($_GET)){
    $id=$_GET['id'];
    $book1=new Book();
    $book1->fetch_book($id);
}
/*    $title=$_GET["title"];
    $author=$_GET["author"];
    $price=$_GET["price"];
    echo "<h3>Book Details</h3>";
    echo "<div class='book'>";
    echo "<ul>";
    echo "<li>{$id}</li>";
    echo "<li>{$title}</li>";
    echo "<li>{$author}</li>";
    echo "<li>{$price} {$_COOKIE['price']}</li>";
    echo "</ul>";
    echo "</div>";
    $book=["ID"=>$id,"Title"=>$title,"Author"=>$author,"Price"=>$price];

    //if(in_array($book,$_SESSION['cart'])){
      //  echo "this book was already added to cart";
    //}else{
        $_SESSION['cart'][]=["ID"=>$id,
        "Title"=>$title,
        "Author"=>$author,
        "Price"=>$price];
        echo "<pre/>";
        print_r($_SESSION);
    //}    */


    
    ?>

        
        <form action="cart.php" method="post">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <input type="submit" name="submit" value="Confirm">
    
</form>
<?php
    

require_once("../includes/footer.php");
?>