<?php
require_once("../includes/header.php");
require_once("../classes/book.php");
require_once("../function.php");
if(isset($_COOKIE['price'])){
    echo "<table class='table'>
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>";
                        $books=new Book();
                        $books->fetch_all_books();            
            echo "</tbody></table>";


            echo "<form action='logout.php' method='post'>
        <input type='submit' name='logout' value='Logout'>
    </form>";

}        else{
    header("location:preferences.php");
}

require_once("../includes/footer.php");


?>