<?php
session_start();
include "../depend/database.php";

if(isset($_POST['admin_login'])){
    $admin_user=mysqli_real_escape_string($db_connc,htmlspecialchars($_POST['admin_user']));
    $admin_pass=mysqli_real_escape_string($db_connc,htmlspecialchars($_POST['admin_pass']));

    //validate in database

    $query1= "SELECT * FROM admin WHERE username = '{$admin_user}'";
    $result1=mysqli_query($db_connc,$query1);

    if($row = mysqli_fetch_assoc($result1)){
        if(md5($admin_pass) == $row["admin_pass"]){
            //collect the admin_id and set session
            //set session with the admin_id
            $_SESSION['login']="admin";
            $_SESSION['admin_id']=$row['admin_id'];
            header('location:home.php');
        }
        else{
            $_SESSION['err'] ="Incorrect Password!";
            header('Location:login.php');       
        }
    }
    else{
        $_SESSION['err'] ="User Not found";
        header('Location:login.php');
    }
    
    
}





?>