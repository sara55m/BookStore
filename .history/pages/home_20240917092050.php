<?php
session_start();
require_once("../includes/header.php");

if(!isset($_POST['name'],$_POST['email'])){
    ?>
     <form action="home.php" method="post">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <input type="submit" name="submit" value="Confirm">    
</form>

<?php
}else{
    $_SESSION['name']=$_POST['name'];
    $_SESSION['email']=$_POST['email'];
    

function hello(){
    return "<h2>Welcome .{$_SESSION['name']}</h2>";
}
echo hello();
}



echo "<a href='BookList.php'>Go To The Book List</a>";       
require_once("../includes/footer.php");
?>