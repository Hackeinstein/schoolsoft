<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header('location:login.php');
}else{
    header('location:home.php');
}
?>