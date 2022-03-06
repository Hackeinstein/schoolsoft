<?php
session_start();
//retrive form data
if (isset($_POST['submit'])){
    //collect form data on call
    $school_name= htmlspecialchars($_POST['school_name']);
    $school_admin=htmlspecialchars($_POST['school_admin']);
    $password1=htmlspecialchars($_POST['password1']);
    $password2=htmlspecialchars($_POST['password2']);
    //inital setup details
    $db_host=htmlspecialchars($_POST['db_host']);
    $db_user=htmlspecialchars($_POST['db_user']);
    $db_passwd=htmlspecialchars($_POST['db_passwd']);
    $db_name=htmlspecialchars($_POST['db_name']);
    $db_connc=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

    if($password1 == $password2){
          //check if database connection is valid
            $password=md5($password2);
        if($db_connc){
            //procceed with rest of code
            $db_file=fopen("../depend/database.php","a+");
            //input new database config in file 

            $file_txt="<?php\n";
            $file_txt.="\$db_host='{$db_host}';\n";
            $file_txt.="\$db_user='{$db_user}';\n";
            $file_txt.="\$db_passwd='{$db_passwd}';\n";
            $file_txt.="\$db_name='{$db_name}';\n";
            $file_txt.="\$db_connc=mysqli_connect(\$db_host,\$db_user,\$db_passwd,\$db_name);\n";
            $file_txt.="?>\n";

            fwrite($db_file,$file_txt);
            fclose($db_file);
            
            //create new table for admin

            $query1="CREATE TABLE admin 
            (admin_id INT(50) NOT NULL AUTO_INCREMENT , 
             school_name VARCHAR(300) NOT NULL , 
             admin_name VARCHAR(300) NOT NULL , 
             admin_pass VARCHAR(300) NOT NULL ,
             PRIMARY KEY (admin_id)) ENGINE = InnoDB";
            
            if(mysqli_query($db_connc,$query1)){
                //proceed to create new admin
                $query2="INSERT INTO admin  (school_name, admin_name,admin_pass)
                VALUES ('{$school_name}', '{$school_admin}', '{$password}')";

                if(mysqli_query($db_connc,$query2)){
                        unset($_SESSION['err']);
                        header("location: step2.php");
                }else{
                    $_SESSION['err']="Cannot create user";
                    header("location: step2.php");
                }

            }else{
                $_SESSION['err']="Cannot create table";
                header("location: step2.php");
            }

        }else{
            $_SESSION['err']="Invalid database";
            header("location: step2.php");
        }
    
    }else{
        $_SESSION['err']="Password not matching";
        header("location: step2.php");
    }

}