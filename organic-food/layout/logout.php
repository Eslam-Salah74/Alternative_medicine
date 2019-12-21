<?php 
session_start();
if(isset($_POST['logoutbtn'])){
    session_destroy();
    session_unset();
    header("Location: register.php");
}


?>