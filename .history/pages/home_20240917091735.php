<?php
require_once("../includes/header.php");


function hello(){
    return "<h2>Welcome</h2>";
}
if(!isset($_POST['name'],$_POST['email'])){
    ?>
     <form action="BookList.php" method="post">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <input type="submit" name="submit" value="Confirm">
    
</form>

<?php
}


echo hello();
echo "<a href='BookList.php'>Go To The Book List</a>";       
require_once("../includes/footer.php");
?>
