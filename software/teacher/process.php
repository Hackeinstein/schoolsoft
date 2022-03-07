<?php
session_start();
include "../depend/database.php";

if(isset($_POST['teacher_login'])){
    $teacher_user=mysqli_real_escape_string($db_connc,htmlspecialchars($_POST['teacher_user']));
    $teacher_pass=mysqli_real_escape_string($db_connc,htmlspecialchars($_POST['teacher_pass']));

    //validate in database

    $query1= "SELECT * FROM teacher WHERE username = '{$teacher_user}'";
    $result1=mysqli_query($db_connc,$query1);

    if($row = mysqli_fetch_assoc($result1)){
        if(md5($teacher_pass) == $row["password"]){
            //collect the teacher_id and set session
            //set session with the teacher_id
            $_SESSION['login']="teacher";
            $_SESSION['teacher_id']=$row['teacher_id'];
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