<?php
    include_once("Model/mSanpham.php");
    class controllerProduct{
        function getAllProduct(){
            $p = new modelProduct();
            $tbl = $p->selectAllProduct();
            return $tbl;
        }

        //hàm phân loại giá
        function getAllProductByPrice($price){
            $p = new modelProduct();
            $tbl = $p->selectAllProductByPrice($price);
            return $tbl;
        }
        function getAllProductByName($name){
            $p = new modelProduct();
            $tbl = $p->selectAllProductByName($name);
            return $tbl;
        }

        function displayPrice($price){
            $c = strlen($price);
            $dem = 0;
            $result=0;
            for($i = $c - 1; $i >= 0; $i--){
                $result = $price[$i].$result;
                $dem++;
                if($dem == 3  && $i > 0 ){
                    $result = ".".$result;
                    $dem = 0;
                }
            }
            return $result;
        }
    }
    ?>