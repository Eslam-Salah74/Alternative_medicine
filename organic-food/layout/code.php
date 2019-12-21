<?php
session_start();
include('../admin/includes/dbconfig/dp.php');
// Insert User Code (Register)
if(isset($_POST['registerbtn'])){
    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];  
    $usertype  = $_POST['usertype'];       
    if($password === $cpassword){
        $query     ="INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype') ";
        $query_run = mysqli_query($connection , $query);
 
        if($query_run){
            $_SESSION['success']= "Admin Profile Added";
            header('Location: register.php');
        }
        else{
            $_SESSION['status']= "Admin Profile Does Not Added";
            header('Location: register.php');
        }
    }
    else{
        $_SESSION['status']= "Password Does Not Match";
            header('Location: register.php');
    }
}
// Login User Code
	


// Login User Code
if(isset($_POST['loginbtn'])){
    $email_login    = $_POST['email'];
    $password_login = $_POST['pasword'];
    $query          = " SELECT * FROM  register WHERE email='$email_login' AND password ='$password_login' ";
    $query_run      = mysqli_query($connection , $query);
    $row            = mysqli_fetch_array($query_run);
    if($row['usertype'] == 'User'){
        $_SESSION['email_user'] = $email_login;
        header('Location: index.php');
    }else if($row['usertype'] == 'Admin'){
        header('Location: ../admin/register.php');
    } else{
        $_SESSION['status'] = "Sorry Email OR Password Invalid ";
        header('Location: register.php');
    }
}
