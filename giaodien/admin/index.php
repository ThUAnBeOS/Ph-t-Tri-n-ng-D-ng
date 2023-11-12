
<?php
    session_start();
        if($_SESSION['role']==="admin"){
            if ($_GET['act'] === 'thongke') {
                include_once("header.php");
                include_once('View/thongke.php');
            }else if($_GET['act'] === 'taikhoan'){
                include_once("header.php");
                include_once('View/listNV.php');
            }else if($_GET['act'] === 'monan'){
                include_once("header.php");
                include_once('View/listMA.php');
            }
            else{
                include_once("header.php");
            }  
        }else{
            echo header("refresh:0; url='dangnhap.php'");
        }
    
?>
