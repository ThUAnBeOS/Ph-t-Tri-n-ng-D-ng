<?php
    include_once("connect.php");
    class modelProduct{
        function selectAllProduct(){
            $conn = new mysqli("localhost", "thuanthuan", "123456789", "databa");
            $p = new KetNoiDB();
            if($p->moKetnoi($conn)){
                $str = "SELECT * from sanpham ORDER BY RAND()  LIMIT 15";
                $tbl = $conn->query($str);
                $p->dongKetNoi($conn);
                return $tbl;
            }else{
                return false;
            }
        }

        //phân loại theo giá
        function selectAllProductByPrice($price){
            $conn = new mysqli("localhost", "thuanthuan", "123456789", "databa");
            $p = new KetNoiDB();
            if($p->moKetnoi($conn)){
                $str = "SELECT * FROM sanpham WHERE gia = ".$price." order by ma_mon_an asc";
                $tbl = $conn->query($str);
                $p -> dongKetNoi($conn); 
                return $tbl;
            }else{
                return false;
            }
        }
        //hàm tìm theo tên
        function selectAllProductByName($name){
            $conn = new mysqli("localhost", "thuanthuan", "123456789", "databa");
            $p = new KetNoiDB();
            if($p->moKetnoi($conn)){
                $str = "SELECT * FROM sanpham WHERE ten_mon_an like N'%".$name."%' order by ma_mon_an asc";
                $tbl = $conn->query($str);
                $p -> dongKetNoi($conn); 
                return $tbl;
            }else{
                return false;
            }
        }
    }
?>