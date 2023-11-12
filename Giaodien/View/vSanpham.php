<?php
    include_once("Controller/cSanpham.php");
    class viewSanpham{
        function viewAllProduct(){
            $p = new controllerProduct();
            $tbl = $p->getAllProduct();
            $this->displayViewAllProduct($tbl);
        }
        function viewProductPrice($sprice){
            $p = new controllerProduct();
            $tbl = $p->getAllProductByPrice($sprice);
            $this->displayViewAllProduct($tbl);
        }
        function viewProductName($sname){
            $p = new controllerProduct();
            $tbl = $p->getAllProductByName($sname);
            $this->displayViewAllProduct($tbl);
        }
        function displayViewAllProduct($tbl){
            if($tbl){
                $p = new controllerProduct();
                if(mysqli_num_rows($tbl) > 0){
                    $dem=0;
                    echo('<table style="text-align:center; margin-left: 20px 20px; width:100%">');
                    echo('<tr>');
                    while($row = mysqli_fetch_assoc($tbl)){
                        if($dem == 0){
                            echo('<tr>');
                        }
                        echo('<td style="border-radius: 5px;border: 1px solid black;padding:20px">');
                        echo('<img src="image/'.$row['hinh_anh'].'" alt="'.$row['ten_mon_an'].'m "width="250px" height="200px"/><br>');
                        echo('<br><b>'.$row["ten_mon_an"].'</b><br>');
                        echo('<br><b>'.$p->displayPrice($row['gia'])." "."VNĐ".'</b><br>');
                        echo('</td>');
                        $dem++;
                        if($dem == 3){
                            echo('</tr>');
                            $dem = 0;
                        }
                    }
                    if($dem >0){
                        echo('</tr>');
                    }
                    echo('</table>');
            }
            else{
                echo"Have Some Error";
            }
        }
        }
    }
?>