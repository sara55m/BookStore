<?php
require_once("../includes/header.php");
require_once("../function.php");
require_once("../database.php");
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
}        else{
    header("location:preferences.php");
}

require_once("../includes/footer.php");


?>