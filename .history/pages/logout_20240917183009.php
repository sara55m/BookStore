<?php
session_start();

if(isset($_POST["logout"])){
    //echo "<pre/>";
    //print_r($_SESSION);
    session_unset(); 
    session_destroy();
    header("location:./home.php");
}

?>