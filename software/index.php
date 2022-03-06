<?php

$install= "false";

if($install=="false"){
    header("location:install/");
}else{
    header("location:login.php");
}
?>