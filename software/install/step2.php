<?php
session_start();
if(isset($_SESSION['err'])){
    header('location:index.php');
}
?>