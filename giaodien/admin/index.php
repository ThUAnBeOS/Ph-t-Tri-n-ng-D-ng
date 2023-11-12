
<?php
    session_start();
        if($_SESSION['role']==="admin"){
            include_once("header.php");   
        }else{
            echo header("refresh:0; url='dangnhap.php'");
        }
    
?>
