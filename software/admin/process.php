<?php
session_start();
include "../depend/database.php";

if(isset($_POST['admin_login'])){
    $admin_user=mysqli_real_escape_string($db_connc,htmlspecialchars($_POST['admin_user']));
    $admin_pass=mysqli_real_escape_string($db_connc,htmlspecialchars($_POST['admin_pass']));

    $password=md5($admin_pass);
    //validate in database

    $query1= "SELECT * FROM admin WHERE username = '{$admin_user}' AND password = '{$admin_pass}'
    ";
    $result1=mysqli_query($db_connc,$query1);

    if($result1){
        //collect the admin_id and set session
        $row1=mysqli_fetch_assoc($result1);
        //set session with the admin_id
        $_SESSION['login']="admin";
        $_SESSION['admin_id']=$row1['admin_id'];
        header('location:home.php');
    }else{
        $_SESSION['err'] ="User Not found";
        header('Location:login.php');
    }
    
}





?>