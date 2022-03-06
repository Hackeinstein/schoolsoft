<?php
session_start();
if(isset($_SESSION['student'])){
    header('location:login.php');
}else{
    header('location:home.php');
}
?>