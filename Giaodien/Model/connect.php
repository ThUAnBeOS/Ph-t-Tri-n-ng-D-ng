<?php
    class KetNoiDB{
        function moKetnoi(& $conn){
            $conn = mysqli_connect("localhost","thuanthuan","123456789");
            mysqli_set_charset($conn,"utf8");
            if($conn){
                $db = mysqli_select_db($conn,"databa");
                return $db;
            }else{
                return false;
            }
        }
        function dongKetNoi($conn){
            mysqli_close($conn);
        }
    }
?>