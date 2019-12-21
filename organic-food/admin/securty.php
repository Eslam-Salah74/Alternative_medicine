<?php
session_start();
/*include('includes/dbconfig/dp.php');
if($db){

}else{
  header('Location:includes/dbconfig/dp.php ');
}*/


if(!$_SESSION['email']){
   header('Location: login.php');
 }

 ?>