<?php
require_once("../includes/header.php");
require_once("../function.php");

if(isset($_POST["currency"])){
    setcookie("price",$_POST["currency"],time()+60*60*24,"/");
    //echo $_POST['currency'];
    //echo "<br/>";
    //echo $_COOKIE['price'];
    header("location:home.php");
}else{?>
<h3>Choose Your Prefered Currency</h3>
    <form action="preferences.php" method="post">
        <select name="currency">
            <option value="EG">EG</option>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            </select>
            <br/>
            <input type="submit" name="submit" value="Submit">
            </form>

<?php
}
require_once("../includes/footer.php");
?>