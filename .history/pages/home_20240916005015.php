<?php
require_once("../includes/header.php");


function hello(){
    return "<h2>Welcome</h2>";
}
echo hello();
echo "<a href='BookList.php'>Go To The Book List</a>";       
require_once("../includes/footer.php");
?>
