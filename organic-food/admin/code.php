<?php 
session_start();
include('includes/dbconfig/dp.php');

// Insert Admin Code (Register)
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

// Update Admin Code
if(isset($_POST['updatbtn'])){
    $update_id       = $_POST['update_id']; 
    $updat_username  = $_POST['updat_username'];
    $updat_email     = $_POST['updat_email'];
    $updat_password  = $_POST['updat_password'];
    $updat_usertype  = $_POST['updat_usertype'];

    $query =" UPDATE register SET username= '$updat_username' , email= '$updat_email'  , password= '$updat_password', usertype='$updat_usertype' WHERE id = '$update_id'";
    $query_run = mysqli_query($connection , $query);

    if($query_run){
        $_SESSION['success'] = "Your Data Is Updated";
        header('Location: register.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Updated";
            header('Location: register.php');
    }
}
// Delet Admin Code
if(isset($_POST['deletbtn'])){
    $delet_id       = $_POST['delet_id']; 
    $query =" DELETE FROM register WHERE id = '$delet_id'";
    $query_run = mysqli_query($connection , $query);

    if($query_run){
        $_SESSION['success'] = " Your Data Is Deleted";
        header('Location: register.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Deleted";
            header('Location: register.php');
    }
}
// Login Admin Code
if(isset($_POST['loginbtn'])){
    $email_login    = $_POST['email'];
    $password_login = $_POST['pasword'];
    $query          = " SELECT * FROM  register WHERE email='$email_login' AND password ='$password_login' ";
    $query_run      = mysqli_query($connection , $query);
    $row      = mysqli_fetch_array($query_run);
    if($row['usertype'] == 'Admin'){
        $_SESSION['email'] = $email_login;
        header('Location: index.php');
    }else if($row['usertype'] == 'User'){
        header('Location: ../layout/index.php');
    } else{
        $_SESSION['status'] = "Sorry Email OR Password Invalid ";
        header('Location: login.php');
    }
}
/* ################### ( Home Page )###############*/
// Insert Home Code
if(isset($_POST['save_gallery'])){
    $gallery_name          = $_POST['gallery_name'];
    $gallery_description   = $_POST['gallery_description'];
    $gallery_image         = $_FILES['gallery_image']['name'];
    
    
    if(file_exists("upload/home/gallery/".$_FILES['gallery_image']['name'])){
        $stor = $_FILES['gallery_image']['name'];
        $_SESSION['status'] = " Image Already  Exist '.$stor.'";
        header('Location: home_gallery.php');
    }else{

        $query = " INSERT INTO home(name,description,image) VALUES ('$gallery_name','$gallery_description','$gallery_image')";
        $query_run = mysqli_query($connection,$query); 
        if($query_run){
            move_uploaded_file($_FILES['gallery_image']['tmp_name'],"upload/home/gallery/".$_FILES['gallery_image']['name']);
            $_SESSION['success'] = " Your Data Is Added";
            header('Location: home_gallery.php');
        }else{
            $_SESSION['status']= "Your Data Does Not Add";
                header('Location: home_gallery.php');
        }
    }

}
// Update Code
if(isset($_POST['gallery_updatbtn'])){
    $updat_gallery_id          = $_POST['updat_gallery_id'];
    $updat_gallery_name        = $_POST['updat_gallery_name'];
    $updat_gallery_description = $_POST['updat_gallery_description'];
    $updat_gallery_image       = $_FILES['updat_gallery_image']['name'];
    $query = " UPDATE home SET name ='$updat_gallery_name',description ='$updat_gallery_description',image ='$updat_gallery_image' WHERE id ='$updat_gallery_id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        move_uploaded_file($_FILES['updat_gallery_image']['tmp_name'],"upload/home/gallery/".$_FILES['updat_gallery_image']['name']);
        $_SESSION['success'] = " Your Data Updated";
        header('Location: home.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Update";
        header('Location: home.php');
    }

}
// Delet Code
if(isset($_POST['gallery_deletbtn'])){
    $gallery_id  = $_POST['gallery_id'];
    $query       = " DELETE FROM home WHERE id= '$gallery_id '";
    $query_run   = mysqli_query($connection,$query);
    /*unlink('upload/home/gallery');*/
    if($query_run){
        $_SESSION['success'] = " Your Data Is Deleted";
        header('Location: home.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Deleted";
            header('Location: home.php');
    }
}

//================ ( About Us Code ) ===============
// Insert About Us  Code
if(isset($_POST['aboutusbtn'])){
    $title        = $_POST['title'];
    $subtitle     = $_POST['subtitle'];
    $description  = $_POST['description'];
    $links        = $_POST['links'];  
    
    $query        = " INSERT INTO aboutus (title,subtitle,description,links) VALUES ('$title','$subtitle','$description','$links') ";
    $query_run    = mysqli_query($connection,$query);

    if($query_run){
        $_SESSION['success']= "About Us Information Added";
        header('Location: aboutus.php');
    }
    else{
        $_SESSION['status']= "About Us Information Does Not Added";
        header('Location: aboutus.php');
    }
}

// Update About Us Code
if(isset($_POST['about_updatbtn'])){
    $about_update_id            = $_POST['about_update_id']; 
    $about_update_title         = $_POST['about_update_title'];
    $about_update_subtitle     = $_POST['about_update_subtitle'];
    $about_update_description   = $_POST['about_update_description'];
    $about_update_links         = $_POST['about_update_links'];

    $query =" UPDATE aboutus SET title= '$about_update_title' , subtitle= '$about_update_subtitle'  , description= '$about_update_description', links='$about_update_links' WHERE id = '$about_update_id'";
    $query_run = mysqli_query($connection , $query);

    if($query_run){
        $_SESSION['success'] = "Your Data Of About Us Is Updated";
        header('Location: aboutus.php');
    }else{
        $_SESSION['status']= "Your Data Of About Us Does Not Updated";
            header('Location: aboutus.php');
    }
}

// Delete About Us Code
if(isset($_POST['aboutus_deletbtn'])){
    $aboutus_delet_id =$_POST['aboutus_delet_id'];
    $query = " DELETE FROM aboutus WHERE id='$aboutus_delet_id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success'] = " Your Data Is Deleted";
        header('Location: aboutus.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Deleted";
            header('Location: aboutus.php');
    }

}

// +++++++++++++++++++++++( Faculty Code ) +++++++++++++++
// Insert Code 
if(isset($_POST['save_faculty'])){
    $faculty_name        = $_POST['faculty_name'];
    $faculty_designation = $_POST['faculty_designation'];
    $faculty_description = $_POST['faculty_description'];
    $faculty_image       = $_FILES['faculty_image']['name'];
    
    if(file_exists("upload/facultes/".$_FILES['faculty_image']['name'])){
        $stor = $_FILES['faculty_image']['name'];
        $_SESSION['status'] = " Image Already  Exist '.$stor.'";
        header('Location: facultes.php');
        
        
    }else{

        $query     = "INSERT INTO faculty (name,designation,description,faculty_image) VALUES ('$faculty_name','$faculty_designation','$faculty_description','$faculty_image')";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            move_uploaded_file($_FILES['faculty_image']['tmp_name'],"upload/facultes/".$_FILES['faculty_image']['name']);
            $_SESSION['success'] = " Your Data Is Added";
            header('Location: facultes.php');
        }else{
            $_SESSION['status']= "Your Data Does Not Add";
                header('Location: facultes.php');
        }
    }
    
}
// Update Code
if(isset($_POST['faculty_updatbtn'])){
    $updat_faculty_id          = $_POST['updat_faculty_id'];
    $updat_faculty_name        = $_POST['updat_faculty_name'];
    $updat_faculty_designation = $_POST['updat_faculty_designation'];
    $updat_faculty_description = $_POST['updat_faculty_description'];
    $updat_faculty_image       = $_FILES['updat_faculty_image']['name'];
    $query = " UPDATE faculty SET name ='$updat_faculty_name',designation ='$updat_faculty_designation',description ='$updat_faculty_description',faculty_image ='$updat_faculty_image' WHERE id ='$updat_faculty_id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        move_uploaded_file($_FILES['updat_faculty_image']['tmp_name'],"upload/facultes/".$_FILES['updat_faculty_image']['name']);
        $_SESSION['success'] = " Your Data Updated";
        header('Location: facultes.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Update";
        header('Location: facultes.php');
    }
    
}
// Delet Code
if(isset($_POST['faculty_deletbtn'])){
    $faculty_id  = $_POST['faculty_id'];
    $query       = " DELETE FROM faculty WHERE id= '$faculty_id'";
    $query_run   = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success'] = " Your Data Is Deleted";
        header('Location: facultes.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Deleted";
            header('Location: facultes.php');
    }
}
// +++++++++++++++++++++++( Departments Code ) +++++++++++++++
// Insert Code
if(isset($_POST['departments'])){
    $dept_name = $_POST['dept_name'];
    $dept_desc = $_POST['dept_desc'];
    $dept_img = $_FILES['dept_img']['name'];

    if(file_exists("upload/departments/".$_FILES['dept_img']['name'])){
        $stor = $_FILES['dept_img']['name'];
        $_SESSION['status'] = " Image Already  Exist '.$stor.'";
        header('Location: departments.php');

    }else{

        $query = "INSERT INTO departments (dept_name,dept_desc,dept_img) VALUES ('$dept_name','$dept_desc','$dept_img') ";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            move_uploaded_file($_FILES['dept_img']['tmp_name'],"upload/departments/".$_FILES['dept_img']['name']);
            $_SESSION['success'] = " Your Data Is Added";
            header('Location: departments.php');
        }else{
            $_SESSION['status']= "Your Data Does Not Add";
                header('Location: departments.php');
        }
    }
}
// Update Code 
if(isset($_POST['dept_updatbtn'])){
    $dept_update_id    = $_POST['dept_update_id'];
    $update_dept_name  = $_POST['update_dept_name'];
    $update_dept_desc  = $_POST['update_dept_desc'];
    $update_dept_img   = $_FILES['update_dept_img']['name'];

    $query = "UPDATE departments SET dept_name ='$update_dept_name', dept_desc='$update_dept_desc',dept_img='$update_dept_img' WHERE id='$dept_update_id' ";
    $query_run= mysqli_query($connection,$query);
    if($query_run){
        move_uploaded_file($_FILES['update_dept_img']['tmp_name'],"upload/departments/".$_FILES['update_dept_img']['name']);
        $_SESSION['success'] = " Your Data Updated";
        header('Location: departments.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Update";
        header('Location: departments.php');
    }

}
// Delet Code
if(isset($_POST['dept_deletbtn'])){
    $dept_delet_id = $_POST['dept_delet_id'];
    $query = "DELETE FROM departments WHERE dept_id = '$dept_delet_id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['success'] = " Your Data Is Deleted";
        header('Location: departments.php');
    }else{
        $_SESSION['status']= "Your Data Does Not Deleted";
            header('Location: departments.php');
    }
}
// +++++++++++++++++++++++ ( Category Code ) ++++++++++++++