<?php
session_start();
require_once("../includes/header.php");
require_once("../classes/book.php");
if(isset($_GET)){
    $id=$_GET['id'];
    $book1=new Book();
    $book1->fetch_book($id);
}

require_once("../includes/footer.php");
?>